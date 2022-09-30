<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if($result){
            flash("Vous êtes bien connecté")->success();

            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Identifiants incorrects'
            ]);
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/login');
    }
}
