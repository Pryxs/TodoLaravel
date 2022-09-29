<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UsersController extends Controller
{
    public function store(){
        request()->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required'],
        ]);
    
        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return view('/register');
    }
}
