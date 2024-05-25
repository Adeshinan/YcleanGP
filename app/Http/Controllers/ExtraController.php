<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Extra;
use App\Models\Service;
use Illuminate\Http\Request;

class ExtraController extends Controller
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
            $page = 'Extra';
            $int =1;
            $entete = ' Liste des Extra - Y Clean';
            $icons = Icon::all();
            $services = Service::all();
            $extra = Extra::latest()->paginate(10);
                return view('admin.Extra.index', compact('extra','int','entete','page','icons','services'))
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
                'icon_id' => 'required',
                'service_id' => 'required',
                'prix' => 'required|numeric',
                
            ]);
    
           
            // Créer le service
            $extra = Extra::create([
                'nom' => $validatedData['nom'],
                'icon_id' => $validatedData['icon_id'],
                'service_id' => $validatedData['service_id'],
                'prix' => $validatedData['prix'],
            ]);
    
            return redirect()->route('extra.index')->with('success', 'Service created successfully.');
    
        } catch (\Throwable $ex) {
            // Gérer l'erreur
            dd($ex);
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