<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try
        {
            $page = 'Services';
            $int =1;
            $entete = ' Liste des Service - Y Clean';
            $services = Service::latest()->paginate(10);
                return view('admin.Service.index', compact('services','int','entete','page'))
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        try {
            // Valider les données de la requête
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'prix' => 'required|numeric',
                'agent' => 'required|array',
                'agent.*' => 'integer|min:1',
                'heure' => 'required|array',
                'heure.*' => 'integer|min:0',
            ]);
    
            // Créer le service
            $extra = Service::create([
                'nom' => $validatedData['nom'],
                'agent' => json_encode($validatedData['agent']),
                'heure' => json_encode($validatedData['heure']),
                'prix' => $validatedData['prix'],
            ]);
    
            return redirect()->route('service.index')->with('success', 'Service created successfully.');
    
        } catch (\Throwable $ex) {
            // Gérer l'erreur
            return back()->withErrors(['error' => 'An error occurred: ' . $ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}