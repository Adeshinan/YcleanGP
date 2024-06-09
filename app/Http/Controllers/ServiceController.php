<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Service;
use App\Models\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $parametre = Parametre::all();
            $extra = Extra::all();
            $services = Service::latest()->paginate(10);
                return view('admin.service.index', compact('services','int','entete','page','parametre','extra'))
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
    try {

        $request->merge([
            'extra' => $request->input('extra', []),
        ]);
        // Valider les données de la requête
        $validatedData = $request->validate([
            'libelle' => 'required|string|max:255',
            'est_agent' => 'nullable|boolean',
            'personalise' => 'nullable|boolean',
            'agent' => 'nullable|integer|min:1',
            'heure' => 'nullable|integer|min:0',
            'pourcentage' => 'nullable|integer',
            'prixhors' => 'nullable|integer',
            'extra' => 'nullable|array',
            'parametre' => 'nullable|array',
        ]);

        // Créer le service
        $service = Service::create([
            'libelle' => $validatedData['libelle'],
            'est_agent' => $validatedData['est_agent'],
            'personalise' => $validatedData['personalise'],
            'agent' => $validatedData['agent'],
            'heure' => $validatedData['heure'],
            'pourcentage' => $validatedData['pourcentage'],
            'prixhors' => $validatedData['prixhors'],
            'extra' => json_encode($validatedData['extra']),
        ]);
        
        return redirect()->route('service.index')->with('success', 'Service created successfully.');

    } catch (\Throwable $ex) {
        dd($ex);
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
        try{
            $page = 'Modification servive';
    
            $entete = 'Modifier Service - Y Clean';
            $service = Service::find($id);
            $extra = Extra::all();
            return view('admin.service.edit', compact('service','entete','page','extra'));
        }
            catch(\Illuminate\Database\QueryException $ex){
            
            Alert::toast('Une erreur est survenue lors de l\'enregistrement.', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back();
            }
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
        // Valider les données entrantes
        $validatedData = $request->validate([
            'libelle' => 'required|string|max:255',
            'est_agent' => 'required|boolean',
            'personalise' => 'required|boolean',
            'agent' => 'nullable|integer',
            'heure' => 'nullable|integer',
            'pourcentage' => 'nullable|integer',
            'prixhors' => 'nullable|numeric',
            'extra' => 'nullable|array',
            'extra.*' => 'exists:extras,id',
        ]);

        // Trouver le service à mettre à jour
        $service = Service::findOrFail($id);

        // Mettre à jour les champs du service
        $service->libelle = $validatedData['libelle'];
        $service->est_agent = $validatedData['est_agent'];
        $service->personalise = $validatedData['personalise'];
        $service->agent = $validatedData['agent'] ?? null;
        $service->heure = $validatedData['heure'] ?? null;
        $service->pourcentage = $validatedData['pourcentage'] ?? null;
        $service->prixhors = $validatedData['prixhors'] ?? null;
        $service->extra = $validatedData['extra'] ?? [];

        // Sauvegarder les modifications
        $service->save();

        // Rediriger avec un message de succès
        return redirect()->route('service.index')->with('success', 'Service mis à jour avec succès.');
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



public function getService(Request $request)
{
    $serviceId = $request->id;

    //dd($serviceId);
    $service = Service::find($serviceId);
    
    if ($service) {
       
        return response()->json($service);
    } else {
        return response()->json(['message' => 'Service not found'], 404);
    }
}


public function getValues(Request $request)
{
    // Validate the request parameter
   

    // Fetch the service by its ID
    $serviceId = $request->input('serviceId');
    $service = Service::find($serviceId);

    if (!$service) {
        return response()->json(['message' => 'Service not found'], 404);
    }

    $data = [
        'agent' => $service->agent,
        'heure' => $service->heure,
        'pourcentage' => $service->pourcentage,
    ];

    return response()->json($data, 200);
}





  
}