<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Taux;
use App\Models\Taxe;
use App\Models\Extra;
use App\Models\Service;
use App\Models\Parametre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        try
        {
            $page = 'Reservation en attente';
            $int =1;
            $entete = ' Liste des Reservation en attente - Y Clean';
            if(Auth::user()->type_connecter == 'admin'){
                
                $reservations = Reservation::where('valider',0)->paginate(10);
            }else{
                $reservations = Reservation::where('user_id',Auth::id())
                                            ->where('valider',0)
                                            ->paginate(10);
            }
                return view('client.reservation.index', compact('reservations','int','entete','page'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            $error= "Une erreur inattendue s'est produite." ;
            \Log::error($ex->getMessage());
            return back()->with('error', $error)->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $page = 'Enregistrement reservation';
        $entete = 'Enregistrer Reservation  -  Y Clean';
        
        $services = Service::all();
        $extras = Extra::all();
        $taux = Taux::all();
        $parametres = Parametre::all();
        $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
        $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;

        return view('client.reservation.create',compact('extras','services','entete','page','taux','parametres','tps','tvq'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            'type_paiement' => 'required|integer',
        ]);

       

        Stripe::setApiKey(config('stripe.sk'));
       
        // Ajouter l'ID de l'utilisateur connecté aux données validées
        $validated['user_id'] = Auth::id();

        // Récupérer le service sélectionné
        $service = Service::findOrFail($validated['service_id']);
        
        $servicePrice = $service->prixhors;

        // Calculer le prix total des extras
        $extrasPrice = 0;
        if (isset($validated['extra'])) {
            $extras = Extra::whereIn('id', $validated['extra'])->get();
            foreach ($extras as $extra) {
                $extrasPrice += $extra->prix;
            }
            // Convertir l'array extra en JSON
            $validated['extra'] = json_encode($validated['extra']);
        }

        // Vérifier et appliquer la réduction sur le prix du service si applicable
        if (
            isset($validated['nbre_personne']) && $validated['nbre_personne'] <= $service->agent &&
            isset($validated['heure_session']) && $validated['heure_session'] <= $service->heure
        ) {
            $servicePrice -= ($servicePrice * ($service->pourcentage / 100));
        }

        // Calculer le prix des éléments supplémentaires
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

        // Calculer le PrixDebut
        $PrixDebut = $servicePrice + $extrasPrice + $paramsPrice;

        
        $taxes = Taxe::all();
        $totalTaxPercentage = $taxes->sum('pourcentage');

        
        // Appliquer les taxes sur le prix de départ
        $taxAmount = $PrixDebut * ($totalTaxPercentage / 100);
        $PrixDebutWithTaxes = $PrixDebut + $taxAmount;

        // Appliquer la réduction basée sur nbre_fois si applicable
        $PrixTotal = $PrixDebutWithTaxes;
     
       
        if (isset($validated['nbre_fois'])) {
            $taux = Taux::where('libelle', $validated['nbre_fois'])->first();
            if ($taux) {
                $PrixTotal = $PrixDebutWithTaxes - ($PrixDebutWithTaxes * ($taux->pourcentage / 100));
            }
        }
       /*  $f = $taux->pourcentage / 100;
        $c = $PrixDebutWithTaxes * ($taux->pourcentage / 100);
        dd('service',$servicePrice,'extrasPrice',$extrasPrice,'paramsPrice',$paramsPrice,'PrixDebut',$PrixDebut,'PrixDebutWithTaxes', $PrixDebutWithTaxes,'PrixTotal', $PrixTotal,'tps',$taxAmount,'f',$f,$c); */
        // Enregistrer la réservation avec le prix total calculé
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
          
            Reservation::create($validated);
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect($session->url);
            
        }else{
            Reservation::create($validated);
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('reservation.index');
        }
       
       // return redirect()->back()->with('success', 'Réservation enregistrée avec succès.');
    }  catch (\Throwable $ex) {
        Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back()->withInput();
    }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $page  = 'Détail Reservation';
        $entete = 'Détail Reservation  -  Y Clean';
        $reservation = Reservation::find($id);
        $extra = Extra::all();
        $parametre = Parametre::all();
        $taux = Taux::all();
        $service = Service::where('id',$reservation->service_id)->first();
        $tps = Taxe::where('libelle', 'tps')->first()->pourcentage;
        $tvq = Taxe::where('libelle', 'tvq')->first()->pourcentage;
        return view('client.reservation.show',compact('reservation','entete','extra','parametre','taux','service','tps','tvq','page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function Valider($id){
        $reservation = Reservation::find($id);
        if($reservation){
            $reservation->update(['valider' => 1]);
            Alert::toast('Reservation valider avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('reservationliste.valider');
        }else{
            Alert::toast('la reservation chercher n\'existe pas', 'error')->position('top-end')->timerProgressBar();
            return redirect()->route('reservation.index');
        }
    }

    public function ReservationValider(){
        
        try
        {
            $page = 'Reservation valider';
            $int =1;
            $entete = ' Liste des Reservation en valider - Y Clean';
            if(Auth::user()->type_connecter == 'admin'){
                $reservations = Reservation::where('user_id',Auth::id())
                                            ->where('valider',1)->paginate(10);
             }else{
                $reservations = Reservation::where('valider',1)->paginate(10);
                
            }
                return view('client.reservation.valider', compact('reservations','int','entete','page'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        catch (\Throwable $ex) {
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back()->withInput();
        }
    }


    public function success(){
        return "paiement reçu";
    }


    public function checkout(){
        return "paiement echoué";
    }

    
}