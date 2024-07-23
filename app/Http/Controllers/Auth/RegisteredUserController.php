<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Rules\StrongPassword;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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

            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'postal' => ['required', 'string', 'max:10'],
                'ville' => ['required', 'string', 'max:100'],
                'numero' => ['required', 'string', 'max:15'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'confirmed', new StrongPassword],
            ]);
        
            if ($validator->fails()) {
                $errors = $validator->errors();
                $errorMessages = '';
                foreach ($errors->all() as $message) {
                    $errorMessages .= $message . '<br>';
                }

                Alert::toast($errorMessages, 'error')->position('top-end')->timerProgressBar();
                return back()->withInput();
            }

           
            $user = User::create([
                'name' => $request->name,
                'address' => $request->address,
                'postal' => $request->postal,
                'ville' => $request->ville,
                'numero' => $request->numero,
               // 'mode_connexion' => $request->mode_connexion,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

           
            
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        } catch (\Throwable $ex) {
           dd($ex);
            //throw $th;
            Alert::toast($th->getMessage(), 'error')->position('top-end')->timerProgressBar();
        }
       
    }
}