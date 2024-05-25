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
            $service = Service::latest()->paginate(10);
                return view('admin.service', compact('service','int','entete','page'))
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
            'is_varie' => 'nullable|boolean',
            'prix_fixe' => 'nullable|numeric',
            'prixservices' => 'required_if:is_varie,true|array',
            'prixservices.*.agents_start' => 'required_if:is_varie,true|integer|min:1',
            'prixservices.*.agents_end' => 'required_if:is_varie,true|integer|min:1',
            'prixservices.*.heure_start' => 'required_if:is_varie,true|integer|min:0',
            'prixservices.*.heure_end' => 'required_if:is_varie,true|integer|min:0',
            'prixservices.*.prix' => 'required_if:is_varie,true|numeric|min:0',
        ]);

       //dd($validatedData);
        // Créer le service
        $service = Service::create([
            'nom' => $validatedData['nom'],
            'is_varie' => $validatedData["is_varie"] ?? false,
            'prix_fixe' => $validatedData['prix_fixe'] ?? null,
        ]);

        // Ajouter les prix variables si nécessaire
        if ($validatedData['is_varie'] ) {
            foreach ($validatedData['pricings'] as $prixservices) {
                $service->pricing()->create([
                    'agents_start' => $prixservices['agents_start'],
                    'agents_end' => $prixservices['agents_end'],
                    'heure_start' => $prixservices['heure_start'],
                    'heure_end' => $prixservices['heure_end'],
                    'prix' => $prixservices['prix'],
                ]);
            }
        }

        return redirect()->route('service.index');

        } catch (\Throwable $ex) {
            //throw $th;
            dd($ex);
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