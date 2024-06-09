<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function index(){
        $entete = ' Messagerie - Y CLEAN';
        return view('admin.Message.index',compact('entete'));
    }
}