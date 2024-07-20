<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //



    public function Reservation(){
        

        try {
            $validated = $request->validate([
                'service_id' => 'required|exists:services,id',
                'extra' => 'nullable|array',
                'chambre' => 'nullable|integer',
                'cuisine' => 'nullable|integer',
                'salle_bain' => 'nullable|integer',
                'salle_eau' => 'nullable|integer',
                'salon' => 'nullable|integer',
                'buanderie' => 'nullable|integer',
                'entre_couloir' => 'nullable|integer',
                'escalier' => 'nullable|integer',
                'nbre_personne' => 'nullable|integer',
                'heure_session' => 'nullable|string',
                'nbre_fois' => 'nullable|string',
                'date_visite' => 'required|date',
                'pour_qui' => 'required|boolean',
                'address' => 'nullable|string',
                'code' => 'nullable|string',
                'ville' => 'nullable|string',
                
                'name' => 'required|string',
                'adress' => 'required|string',
                'email' => 'required|string',
                'postal' => 'required|string',
                'contact' => 'required|string',
                'vill' => 'required|string',

                'type_paiement' => 'required|integer',
            ]);



            $userData = [
                'name' => $validated['name'],
                'adress' => $validated['adress'],
                'email' => $validated['email'],
                'postal' => $validated['postal'],
                'contact' => $validated['contact'],
                'vill' => $validated['vill'],
            ];

            $reservationData = $validated;
            unset($reservationData['name'], $reservationData['adress'], $reservationData['email'], $reservationData['postal'], $reservationData['contact'], $reservationData['vill']);


            if ($user) {
                // User exists, create reservation with existing user ID
                Stripe::setApiKey(config('stripe.sk'));
                $reservationData['user_id'] = $user->id;
              

        
                $service = Service::findOrFail($validated['service_id']);
                $servicePrice = $service->prixhors;
        
                $extrasPrice = 0;
                if (isset($validated['extra'])) {
                    $extras = Extra::whereIn('id', $validated['extra'])->get();
                    foreach ($extras as $extra) {
                        $extrasPrice += $extra->prix;
                    }
                    $validated['extra'] = json_encode($validated['extra']);
                }
        
                if (
                    isset($validated['nbre_personne']) && $validated['nbre_personne'] <= $service->agent &&
                    isset($validated['heure_session']) && $validated['heure_session'] <= $service->heure
                ) {
                    $servicePrice -= ($servicePrice * ($service->pourcentage / 100));
                }
        
                $params = ['chambre', 'cuisine', 'salle_bain', 'salle_eau', 'salon', 'buanderie', 'entre_couloir', 'escalier'];
                $paramsPrice = 0;
                foreach ($params as $param) {
                    if (isset($validated[$param])) {
                        $parametre = Parametre::where('libelle', $param)->first();
                        if ($parametre) {
                            $paramsPrice += $parametre->prix * $validated[$param];
                        }
                    }
                }
        
                $PrixDebut = $servicePrice + $extrasPrice + $paramsPrice;
        
                $taxes = Taxe::all();
                $totalTaxPercentage = $taxes->sum('pourcentage');
        
                $taxAmount = $PrixDebut * ($totalTaxPercentage / 100);
                $PrixDebutWithTaxes = $PrixDebut + $taxAmount;
        
                $PrixTotal = $PrixDebutWithTaxes;
                if (isset($validated['nbre_fois'])) {
                    $taux = Taux::where('libelle', $validated['nbre_fois'])->first();
                    if ($taux) {
                        $PrixTotal = $PrixDebutWithTaxes - ($PrixDebutWithTaxes * ($taux->pourcentage / 100));
                    }
                }
               
                // Générer les dates des séances à venir
                $sessionDates = $this->getSessionDates($validated['date_visite'], $validated['nbre_fois']);
                $validated['session_dates'] = json_encode($sessionDates);
        
               
                $validated['prixTotal'] = $PrixTotal;
        
                if($validated['type_paiement'] == 1){
                    $session = Session::create([
                        'line_items'=>[
                        [
                            'price_data'=>[
                                'currency' => 'CAD',
                                'product_data' => [
                                    "name" => $service->libelle,
                                ],
                                'unit_amount'=> $PrixTotal * 100
                            ],
                            'quantity'=> 1,
                        ],
                        ],
                        'mode' => 'payment',
                        'success_url' => route('success' ),
                        'cancel_url' => route('checkout'),
                    ]);
        
                     Reservation::create($reservationData);

                     Mail::to($user->email)->send(new ReservationDetailsMail($reservation));
            
                // Send reservation details email to all admins
                $admin = User::where('type_connecter', 'admin')->first();
               
                    Mail::to($admin->email)->send(new AdminNotificationMail($reservation));
              
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect($session->url);
                    
                } else {
                    Reservation::create($reservationData);
                    
                    Mail::to($user->email)->send(new ReservationDetailsMail($reservation));
            
                // Send reservation details email to all admins
                   $admin = User::where('type_connecter', 'admin')->first();
                
                    Mail::to($admin->email)->send(new AdminNotificationMail($reservation));
                
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect()->route('reservation.index');
                }


                // Send reservation details email to user
                
            } else {
                // User does not exist, create new user
                $faker = Faker::create();
                $password = $faker->password;
            
                $user = User::create(array_merge($userData, [
                    'password' => bcrypt($password),
                    'email_verified_at' => null, // Ensure the email verification flow
                ]));
            
               
                Stripe::setApiKey(config('stripe.sk'));
                $reservationData['user_id'] = $user->id;
              

        
                $service = Service::findOrFail($validated['service_id']);
                $servicePrice = $service->prixhors;
        
                $extrasPrice = 0;
                if (isset($validated['extra'])) {
                    $extras = Extra::whereIn('id', $validated['extra'])->get();
                    foreach ($extras as $extra) {
                        $extrasPrice += $extra->prix;
                    }
                    $validated['extra'] = json_encode($validated['extra']);
                }
        
                if (
                    isset($validated['nbre_personne']) && $validated['nbre_personne'] <= $service->agent &&
                    isset($validated['heure_session']) && $validated['heure_session'] <= $service->heure
                ) {
                    $servicePrice -= ($servicePrice * ($service->pourcentage / 100));
                }
        
                $params = ['chambre', 'cuisine', 'salle_bain', 'salle_eau', 'salon', 'buanderie', 'entre_couloir', 'escalier'];
                $paramsPrice = 0;
                foreach ($params as $param) {
                    if (isset($validated[$param])) {
                        $parametre = Parametre::where('libelle', $param)->first();
                        if ($parametre) {
                            $paramsPrice += $parametre->prix * $validated[$param];
                        }
                    }
                }
        
                $PrixDebut = $servicePrice + $extrasPrice + $paramsPrice;
        
                $taxes = Taxe::all();
                $totalTaxPercentage = $taxes->sum('pourcentage');
        
                $taxAmount = $PrixDebut * ($totalTaxPercentage / 100);
                $PrixDebutWithTaxes = $PrixDebut + $taxAmount;
        
                $PrixTotal = $PrixDebutWithTaxes;
                if (isset($validated['nbre_fois'])) {
                    $taux = Taux::where('libelle', $validated['nbre_fois'])->first();
                    if ($taux) {
                        $PrixTotal = $PrixDebutWithTaxes - ($PrixDebutWithTaxes * ($taux->pourcentage / 100));
                    }
                }
               
                // Générer les dates des séances à venir
                $sessionDates = $this->getSessionDates($validated['date_visite'], $validated['nbre_fois']);
                $validated['session_dates'] = json_encode($sessionDates);
        
               
                $validated['prixTotal'] = $PrixTotal;
        
                if($validated['type_paiement'] == 1){
                    $session = Session::create([
                        'line_items'=>[
                        [
                            'price_data'=>[
                                'currency' => 'CAD',
                                'product_data' => [
                                    "name" => $service->libelle,
                                ],
                                'unit_amount'=> $PrixTotal * 100
                            ],
                            'quantity'=> 1,
                        ],
                        ],
                        'mode' => 'payment',
                        'success_url' => route('success' ),
                        'cancel_url' => route('checkout'),
                    ]);
        
                     Reservation::create($reservationData);

                    // Send account verification email to user
                $verificationLink = route('verification.notice'); // Adjust this as needed
                Mail::to($user->email)->send(new AccountVerificationMail($user, $verificationLink));
            
                // Send reservation details email to user
                Mail::to($user->email)->send(new ReservationDetailsMail($reservation));
            
                // Send reservation details email to all admins
                $admin = User::where('type_connecter', 'admin')->first();
              
                    Mail::to($admin->email)->send(new AdminNotificationMail($reservation));
               
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect($session->url);
                    
                } else {
                    Reservation::create($reservationData);
                    
                     // Send account verification email to user
                $verificationLink = route('verification.notice'); // Adjust this as needed
                Mail::to($user->email)->send(new AccountVerificationMail($user, $verificationLink));
            
                // Send reservation details email to user
                Mail::to($user->email)->send(new ReservationDetailsMail($reservation));
            
                // Send reservation details email to all admins
                $admin = User::where('type_connecter', 'admin')->first();
              
                    Mail::to($admin->email)->send(new AdminNotificationMail($reservation));
                
                
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect()->route('reservation.index');
                }


            }

























            
    
            //dd($validated);
           
    
        } catch (\Throwable $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enregistrement', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back()->withInput();
        }

        
    }
}