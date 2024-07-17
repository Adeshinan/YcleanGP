<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Messagerie;
use Illuminate\Http\Request;
use App\Events\ChatMessageEvent;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
  
    public function index()
    {
        $entete = 'message';
        $clients = User::where('type_connecter', 'client')->get();
        return view('admin.message.index', compact('clients','entete'));
    }

    public function Chat($id)
    {
        $entete = 'message';
        
        return view('admin.message.chat', compact('id','entete'));
      
    }


    
    
}