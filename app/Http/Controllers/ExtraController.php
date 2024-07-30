<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Extra;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
            $route = route('extra.delete', [":id"]);
            $extras = Extra::latest()->paginate(5);
                return view('admin.extra.index', compact('extras','int','entete','page','icons','services','route'))
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
    
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('extra.index');
    
        }  catch (\Throwable $ex) {
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back()->withInput();
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

        try {
         
           
            $validator = Validator::make($request->all(), [
                'libelle' => 'required|string|max:255',
                'prix' => 'required|numeric',
                
            ]);
            $extra = Extra::findOrFail($id);
    
            $extra->update([
                'libelle' => $request->libelle,
                'prix' => $request->prix,
            ]);
            Alert::toast('Modification effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('extra.index');
    
        }  catch (\Throwable $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back()->withInput();
        }
       
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


    public function delete($id){
        
      
    }


    public function getExtra(Request $request)
{
    $serviceId = $request->id;

    $service = Service::find($serviceId);

    if ($service) {
        $extras = $service->extra;

        // Vérifier si $extras est une chaîne JSON et la décoder en tableau
        $extrasArray = json_decode($extras, true);

        if (is_array($extrasArray)) {
            // Utiliser $extrasArray dans la requête
            $listeExtra = Extra::whereIn('id', $extrasArray)->get();
            return response()->json($listeExtra);
        } else {
            // Gérer le cas où $extras n'est pas un tableau valide
            return response()->json([], 404);
        }
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