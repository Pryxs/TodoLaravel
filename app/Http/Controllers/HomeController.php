<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Todolist;

class HomeController extends Controller
{
    public function getHomePage(){
        // if(!auth()->check()){
        //     flash("Vous devez être connecté pour accéder à cette page")->error();
        //     return redirect('/login');
        // }
        if(auth()->check()){
            $todolist = Todolist::where('user_id', Auth::id())->get();
        }

        return view('/home', [
            'current_user_todolists' => $todolist
        ]);
    }

    public function storeTodolist(){
        request()->validate([
            'title' => ['required'],
        ]);
    
        $todolist = Todolist::create([
            'title' => request('title'),
            'user_id' => Auth::id(),
        ]);

        return redirect('/');
    }
}
