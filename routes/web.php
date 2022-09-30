<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------
|   HOME
|--------------------------------
*/

Route::get('/', [HomeController::class, 'getHomePage']);



/*
|--------------------------------
|   REGISTER
|--------------------------------
*/

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', [UsersController::class, 'store']);



/*
|--------------------------------
|   LOGIN
|--------------------------------
*/

Route::get('/login', function () {
    return view('login');
});


Route::post('/login', [LoginController::class, 'login']);


Route::get('/logout', [LoginController::class, 'logout']);

