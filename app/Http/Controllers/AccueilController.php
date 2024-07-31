<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\Taux;
use App\Models\Taxe;
use App\Models\User;
use App\Models\Extra;
use App\Models\Coupon;
use App\Models\Service;
use App\Models\Parametre;
use App\Models\Reservation;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

use Stripe\Checkout\Session;
use App\Rules\StrongPassword;
use App\Mail\ReservationDetailsMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use App\Notifications\ValidationNotification;

class AccueilController extends Controller
{
    //

    public function Apropos(){
        return view('accueil.apropos');
    }


    public function ReservationLigne(){
        $services = Service::all();
        $extras = Extra::all();
        $taux = Taux::all();
        $parametres = Parametre::all();
        $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
        $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
        return view('accueil.index',compact('extras','services','taux','parametres','tps','tvq'));
    }



    public function Reservation(Request $request){
        

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
                'instruction' => 'required|string',
            'station' => 'required|string',
            'propriete' => 'required|string',
                
                'name' => 'required|string',
                'adress' => 'required|string',
                'email' => 'required|string',
                'postal' => 'required|string',
                'contact' => 'required|string',
                'vill' => 'required|string',

                'type_paiement' => 'required|integer',
            ]);


         /*    if($validated->fails())
        {
            $errors = $validation->errors();
            $errorMessages = '';
            foreach ($errors->all() as $message) {
                $errorMessages .= $message . '<br>';
            }

            Alert::toast($errorMessages, 'error')->position('top-end')->timerProgressBar();
            return back()->withInput();
        } */



            $userData = [
                'name' => $validated['name'],
                'adress' => $validated['adress'],
                'email' => $validated['email'],
                'postal' => $validated['postal'],
                'contact' => $validated['contact'],
                'vill' => $validated['vill'],
                'coupon' => $validated['coupon'],
            ];


            $reservationData = $validated;


            
            unset($reservationData['name'], $reservationData['adress'], $reservationData['email'], $reservationData['postal'], $reservationData['contact'], $reservationData['vill']);

           
            
            $user = User::where('email', $userData['email'])
            ->first();

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
                    $reservationData['extra'] = json_encode($validated['extra']);

                   
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
               
                $sessionDates = $this->getSessionDates($validated['date_visite'], $validated['nbre_fois']);
                $reservationData['session_dates'] = json_encode($sessionDates);
        
               
            $coupon = Coupon::where('libelle',$userData['coupon'])->first();
               
            if($coupon){
                $prix = $PrixTotal * ($coupon->pourcentage / 100);
                
                $reservationData['prixTotal'] = $prix;
            }else{
                $reservationData['prixTotal'] = $PrixTotal;
            }
                
                
        
                
                if($validated['type_paiement'] == 1){
                    $session = Session::create([
                        'line_items'=>[
                        [
                            'price_data'=>[
                                'currency' => 'CAD',
                                'product_data' => [
                                    "name" => $service->libelle,
                                ],
                                'unit_amount'=> $reservationData['prixTotal'] * 100
                            ],
                            'quantity'=> 1,
                        ],
                        ],
                        'mode' => 'payment',
                        'success_url' => route('success' ),
                        'cancel_url' => route('checkout'),
                    ]);
        
                    $reservation = Reservation::create($reservationData);

                     
            
                // Send reservation details email to all admins
                $admin = User::where('type_connecter', 'admin')->first();
               
                $extra = Extra::all();
                $parametre = Parametre::all();
                $taux = Taux::all();
                $service = Service::where('id',$reservation->service_id)->first();
                $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
                $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
    
    
                
    
                
                Mail::to($admin->email)->send(new ReservationDetailsMail($reservation, $extra,$parametre,$taux,$service));
              
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect($session->url);
                    
                } else {
                    $reservation =  Reservation::create($reservationData);
                    
                   // Mail::to($user->email)->send(new ReservationDetailsMail($reservation));
            
                // Send reservation details email to all admins
                   $admin = User::where('type_connecter', 'admin')->first();
                
                   $extra = Extra::all();
                   $parametre = Parametre::all();
                   $taux = Taux::all();
                   $service = Service::where('id',$reservation->service_id)->first();
                   $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
                   $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
       
                   Mail::to($admin->email)->send(new ReservationDetailsMail($reservation, $extra,$parametre,$taux,$service));
                
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return back();
                }


                // Send reservation details email to user
                
            } else {

               
                $faker = \Faker\Factory::create();
                $password = $faker->password;
            
               
                // User does not exist, create new user
                $user = User::create(array_merge( [
                    'name' => $userData['name'],
                    'address' => $userData['adress'],
                    'email' => $userData['email'],
                    'postal' => $userData['postal'],
                    'numero' => $userData['contact'],
                    'ville' => $userData['vill'],
                    'password' => bcrypt($password),
                    'email_verified_at' => null, 
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
                    $reservationData['extra'] = json_encode($validated['extra']);
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
        
               

                $coupon = Coupon::where('libelle',$userData['coupon'])->first();
               
                if($coupon){
                    $prix = $PrixTotal * ($coupon->pourcentage / 100);
                    
                    $validated['prixTotal'] = $prix;
                }else{
                    $validated['prixTotal'] = $PrixTotal;
                }
                
        
                if($validated['type_paiement'] == 1){
                    $session = Session::create([
                        'line_items'=>[
                        [
                            'price_data'=>[
                                'currency' => 'CAD',
                                'product_data' => [
                                    "name" => $service->libelle,
                                ],
                                'unit_amount'=> $validated['prixTotal'] * 100
                            ],
                            'quantity'=> 1,
                        ],
                        ],
                        'mode' => 'payment',
                        'success_url' => route('success' ),
                        'cancel_url' => route('checkout'),
                    ]);

        
                    $reservation= Reservation::create($reservationData);

              
               
                $user->notify(new ValidationNotification($user));
               
            
                $admin = User::where('type_connecter', 'admin')->first();
              
                $extra = Extra::all();
                $parametre = Parametre::all();
                $taux = Taux::all();
                $service = Service::where('id',$reservation->service_id)->first();
                $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
                $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
    
    
                
    
                
                Mail::to($admin->email)->send(new ReservationDetailsMail($reservation, $extra,$parametre,$taux,$service));
               
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return redirect($session->url);
                    
                } else {
                    $reservation = Reservation::create($reservationData);
                    
                    
                     $user->notify(new ValidationNotification($user));
                     
                     $admin = User::where('type_connecter', 'admin')->first();
              
                     $extra = Extra::all();
                     $parametre = Parametre::all();
                     $taux = Taux::all();
                     $service = Service::where('id',$reservation->service_id)->first();
                     $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
                     $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
         
         
                     
         
                     
                     Mail::to($admin->email)->send(new ReservationDetailsMail($reservation, $extra,$parametre,$taux,$service));
                
                    Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
                    return back();
                }


            }

        } catch (\Throwable $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enregistrement', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back()->withInput();
        }

        
    }


    private function getSessionDates($date_visite, $nbre_fois)
{
    $dates = [];
    $date = Carbon::parse($date_visite);
    $interval = null;
    $end_date = Carbon::now()->addYear();
    switch ($nbre_fois) {
        case '1 fois par semaine':
            $interval = '1 week';
            break;
        case '1 fois par quinzaine':
            $interval = '2 weeks';
            break;
        case '1 fois par mois':
            $interval = '1 month';
            break;
        case 'Juste cette fois ci':
            $dates[] = $date->format('d-m-Y H:i');
            return $dates;
        default:
            throw new \Exception("Fréquence inconnue: $nbre_fois");
    }

    while ($date->isBefore($end_date)) {
        $dates[] = $date->format('d-m-Y H:i');
        $date->add($interval);
    }

    return $dates;
}





    public function Modification($id){
        
        $user = User::find($id);
        return view('accueil.validation',compact('user'));
    }


    public function Validation(Request $request ,$id){
        
        try {
            //code...

            $validated = $request->validate([
                'password' => ['required', 'confirmed', new StrongPassword],
               
            ]);
            
            if($validated->fails())
            {
                $errors = $validation->errors();
                $errorMessages = '';
                foreach ($errors->all() as $message) {
                    $errorMessages .= $message . '<br>';
                }
    
                Alert::toast($errorMessages, 'error')->position('top-end')->timerProgressBar();
                return back()->withInput();
            }
    
          
            $user = User::find($id);
            
               
                $user->update(['password' => Hash::make($request->password)]);
                Auth::login($user);
                Alert::toast('Compte valider avec succès', 'success')->position('top-end')->timerProgressBar();
                return redirect(RouteServiceProvider::HOME);
            
        } catch (\Throwable $th) {
            //throw $th;
            Alert::toast($th->getMessage(), 'error')->position('top-end')->timerProgressBar();
            return back();
        }
       

       
    }
}