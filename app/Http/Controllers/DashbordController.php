<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    //

    public function index(){
        
        $entete = 'Dashbord';
        
        if(Auth::user()->type_connecter == "admin"){
            $total_reservation = Reservation::all()->count();
            $total_client = User::where('type_connecter',"Client")->count();
        $reservation_attente = Reservation::where('valider',0)->count();
        $reservation_valider = Reservation::where('valider',1)->count();
        $paiement_espèce = Reservation::where('type_paiement',0)->count();
        $paiement_bancaire = Reservation::where('type_paiement',1)->count();
        
        return view('admin.index',compact('entete','total_reservation','reservation_attente','reservation_valider','paiement_espèce','paiement_bancaire','total_client'));
        
        }else{
            
        
        $total_reservation = Reservation::all()
                            ->where('user_id',Auth::user()->id)
                            ->count();
        $reservation_attente = Reservation::where('valider',0)
                            ->where('user_id',Auth::user()->id)
                            ->count();
        
        $reservation_valider = Reservation::where('valider',1)
                            ->where('user_id',Auth::user()->id)
                            ->count();
        $paiement_espèce = Reservation::where('type_paiement',0)
                            ->where('user_id',Auth::user()->id)
                            ->count();
        $paiement_bancaire = Reservation::where('type_paiement',1)
                            ->where('user_id',Auth::user()->id)
                            ->count();
        
                            return view('admin.index',compact('entete','total_reservation','reservation_attente','reservation_valider','paiement_espèce','paiement_bancaire'));
    }
   
    }



    


    public function Erreur(){
        return view('erreur');
    }
    


    public function getMonthlyReservations()
    {
        $reservations = DB::table('reservations')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();
        
        $monthlyData = array_fill(1, 12, 0); 

        foreach ($reservations as $reservation) {
            $monthlyData[$reservation->month] = $reservation->count;
        }

        return response()->json($monthlyData);
    }
}