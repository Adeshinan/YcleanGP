<?php

namespace App\Http\Controllers;

use App\Models\Taux;
use App\Models\Extra;
use App\Models\Service;
use App\Models\Parametre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $reservations = Reservation::where('id',Auth::id())->paginate(10);
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
        return view('client.reservation.create',compact('extras','services','entete','page','taux','parametres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}