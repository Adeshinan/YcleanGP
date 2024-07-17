<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    //
    public function index(){
        $entete = ' Agenda- Y Clean';
        return view('client.agenda.index',compact('entete'));
    }
}