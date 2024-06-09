<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Extra;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $extras = Extra::latest()->paginate(10);
                return view('admin.extra.index', compact('extras','int','entete','page','icons','services'))
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
            $validator = Validator::make($request->all(), [
                'libelle' => 'required|string|max:255',
                'icon_id' => 'required',
                'service_id' => 'required',
                'prix' => 'required|numeric',
                
            ]);
    
           
            // Créer le service
            $extra = Extra::create($request->all());
    
    
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

    public function getExtra(Request $request)
    {  
        $serviceId = $request->id;

        $service = Service::find($serviceId);
        
        if ($service) {
            $extras = $service->extra; // Pas besoin de décoder car $service->extra est déjà un tableau
            $listeExtra = Extra::whereIn('id', $extras)->get();
            return response()->json($listeExtra);
        } else {
            return response()->json([], 404);
        }
    }


    public function getExtraprix(Request $request)
{
    $extraId = $request->id;
    $extra = Extra::find($extraId);
    
    if ($extra) {
        return response()->json($extra);
    } else {
        return response()->json(['message' => 'Extra non trouvé'], 404);
    }
}
    

}