<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function profile(){
        $entete = ' Profile - Y Clean';
        
        return view('admin.users.profile',compact('entete'));
    }
}