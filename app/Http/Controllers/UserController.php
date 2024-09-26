<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //

    public function profile(){
        $entete = ' Profile - Y Clean';
        
        return view('admin.users.profile',compact('entete'));
    }

    public function edit($id)
    {
        $entete = ' Profile - Y Clean';
        $user = User::find($id);
        
        return view('admin.users.edit',compact('user','entete'));
    }

    public function update(Request $request,$id)
    {
        try
        {
            $validation=Validator::make($request->all(),[

                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
                'numero' => ['required', 'string'],
                'address' => ['required'],
                'ville' => ['required'],
                'postal' => ['required'],


            ]);



            if($validation->fails())
            {
                $errors = $validation->errors();
                $errorMessages = '';
                foreach ($errors->all() as $message) {
                    $errorMessages .= $message . '<br>';
                }

            Alert::toast($errorMessages, 'error')->position('top-end')->timerProgressBar();
            return back()->withInput();
            }

            $utilisateur = User::where('id', $id)->first();
            $utilisateur->update($request->all());


            Alert::toast('Modification effectuée avec succès', 'success')->position('top-end')->timerProgressBar();
            return redirect()->route('edit.profile',Auth::user());
            } catch(\Illuminate\Database\QueryException $ex){
                Alert::toast('Une erreur est survenue lors de la suppression.', 'error')->position('top-end')->timerProgressBar();
                \Log::error($ex->getMessage());
                return back();
            }
    }


    public function updatePassword(Request $request, string $id)
    {
        try
        {
            $validation=Validator::make($request->all(),[
                'current_password' => ['required'],
                'password' => ['required', 'confirmed', Password::defaults()],
            ]);

            if($validation->fails())
            {
                $errors = $validation->errors();
                $errorMessages = '';
                foreach ($errors->all() as $message) {
                    $errorMessages .= $message . '<br>';
                }

            Alert::toast($errorMessages, 'error')->position('top-end')->timerProgressBar();
            return back()->withInput();
            }

            $utilisateur = User::where('id', $id)->first();
          
            if($request['current_password'] != Auth::user()->password)
            {
                Alert::toast('L\'ancien mot de passe est incorrecte.', 'error')->position('top-end')->timerProgressBar();
                return back()->withInput();
            }else{
                $utilisateur->update($request->all());
                Alert::toast('Modification effectuée avec succès', 'success')->position('top-end')->timerProgressBar();
                return redirect()->route('edit.profile',Auth::user());
               
            }

           
        } catch(\Illuminate\Database\QueryException $ex){
            Alert::toast('Une erreur est survenue lors de la suppression.', 'error')->position('top-end')->timerProgressBar();
            \Log::error($ex->getMessage());
            return back();
        }
    }
}