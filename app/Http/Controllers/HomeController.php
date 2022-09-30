<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage(){
        if(!auth()->check()){
            flash("Vous devez être connecté pour accéder à cette page")->error();
            return redirect('/login');
        }

        return view('/home');
    }
}
