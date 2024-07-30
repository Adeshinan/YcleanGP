<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try
        {
            $page = 'Paramètre';
            $int = 1;
            $entete = 'Liste des Paramètres - Y Clean';
            $parametres = Parametre::paginate(5);
            return view('admin.parametre.index', compact('parametres', 'int', 'entete', 'page'));
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            $error = "Une erreur inattendue s'est produite.";
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
        ]);


       
        try {
            $parametre = Parametre::findOrFail($id);
            $parametre->update([
                'nom' => $request->nom,
                'prix' => $request->prix,
            ]);
            Alert::toast('Modification effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('parametre.index');
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back()->with('error', "Une erreur inattendue s'est produite.")->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}