<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
                
                $reservations = Reservation::where('valider',0)->paginate(5);
            }else{
                $reservations = Reservation::where('user_id',Auth::id())
                                            ->where('valider',0)
                                            ->paginate(5);
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

        //dd($validated);
        Stripe::setApiKey(config('stripe.sk'));

        $validated['user_id'] = Auth::id();

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

            Reservation::create($validated);
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect($session->url);
        } else {
            Reservation::create($validated);
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('reservation.index');
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
        $next_sessions = $this->getNextSessions($reservation->session_dates);
        return view('client.reservation.show',compact('reservation','entete','extra','parametre','taux','service','tps','tvq','page','next_sessions'));
    }


    private function getNextSessions($session_dates)
{
    $sessions = json_decode($session_dates, true);
    $now = Carbon::now();
    $upcoming_sessions = [];

    foreach ($sessions as $session) {
        $session_date = Carbon::parse($session);
        if ($session_date->isFuture()) {
            $upcoming_sessions[] = $session_date;
        }
        if (count($upcoming_sessions) == 4) {
            break;
        }
    }

    return $upcoming_sessions;
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


    public function Valider($id)
    {
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

    public function ReservationValider()
    {
        
        try
        {
            $page = 'Reservation valider';
            $int =1;
            $entete = ' Liste des Reservation en valider - Y Clean';
            if(Auth::user()->type_connecter == 'admin'){
                $reservations = Reservation::where('valider',1)->paginate(5);
             }else{
                $reservations = Reservation::where('user_id',Auth::id())
                                            ->where('valider',1)->paginate(5);
                
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


    public function getNextSessionsFromReservation($id)
{
    $reservation = Reservation::find($id);
    $next_sessions = $this->getNextSessions($reservation->session_dates);

    return response()->json(['sessions' => $next_sessions->map(function ($session) {
        return $session->format('d/m/Y H:i');
    })]);
}


public function getAll()
{
    $reservations = Reservation::all();

    return response()->json(['reservations' => $reservations]);
}
 
}