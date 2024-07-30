<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page = 'Liste des Coupons';
        $entete = ' Liste des Coupons - Y Clean';
        $route = route('coupon.delete', [":id"]);
        $coupons = Coupon::paginate(5);
        return view('admin.coupon.index',compact('coupons','page','entete','route'));
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
       
        
        try {
            // Valider les données de la requête
            $validator = Validator::make($request->all(), [
                'libelle' => 'required|string|max:255',
                'pourcentage' => 'required|string',
                
            ]);
    
         
            $coupon = Coupon::create($request->all());
    
            Alert::toast('Enregistrement effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('coupon.index');
    
        }  catch (\Throwable $ex) {
            dd($ex);
            Alert::toast('Une erreur est survenue lors de l\'enrengistrement', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back()->withInput();
        }
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
            $coupon = Coupon::findOrFail($id);
    
            $coupon->update([
                'libelle' => $request->libelle,
                'pourcentage' => $request->pourcentage,
            ]);
            Alert::toast('Modification effectué avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('coupon.index');
    
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


    public function delete($id){
        
        try{

            $coupon = Coupon::find($id);
            $coupon->delete();
            Alert::toast('Coupon supprimé avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('coupon.index');

        } catch(\Illuminate\Database\QueryException $ex){
            //dd($ex);
            Alert::toast('Une erreur est survenue lors de la suppression.', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back();
        }
    }
}