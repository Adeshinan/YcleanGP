<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        try {
            //code...

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'postal' => ['required', 'string', 'max:10'],
                'ville' => ['required', 'string', 'max:100'],
                'numero' => ['required', 'string', 'max:15'],
               // 'mode_connexion' => ['required', 'string', 'max:50'],
                'sexe' => ['required', 'string'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            

           
            $user = User::create([
                'name' => $request->name,
                'address' => $request->address,
                'postal' => $request->postal,
                'ville' => $request->ville,
                'numero' => $request->numero,
               // 'mode_connexion' => $request->mode_connexion,
                'sexe' => $request->sexe,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        } catch (\Throwable $ex) {
           
            //throw $th;
        }
       
    }
}