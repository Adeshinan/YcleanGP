<?php

namespace App\Http\Controllers;

use App\Models\Taxe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TaxeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = 'Liste des Taxes';
        $entete = ' Liste des Taxes - Y Clean';
        $taxe = Taxe::paginate(5);
        return view('admin.taxe.index',compact('taxe','page','entete'));
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
    public function update(Request $request, string $id)
    {
        //

        try {
         
          
            $validator = Validator::make($request->all(), [
                'libelle' => 'required|string|max:255',
                'pourcentage' => 'required|string',
                
            ]);
            $taxe = Taxe::findOrFail($id);
    
            $taxe->update([
                'libelle' => $request->libelle,
                'pourcentage' => $request->pourcentage,
            ]);
            Alert::toast('Modification effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('taxe.index');
    
        }  catch (\Throwable $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back()->withInput();
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