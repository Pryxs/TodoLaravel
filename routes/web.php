<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------
|   HOME
|--------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------
|   REGISTER
|--------------------------------
*/

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', [UsersController::class, 'store']);

