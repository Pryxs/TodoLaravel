<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodolistController;


/*
|--------------------------------
|   HOME
|--------------------------------
*/

Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/', [HomeController::class, 'getHomePage']);
    Route::post('/', [HomeController::class, 'storeTodolist']);
    Route::get('/todolist/{id}', [TodolistController::class, 'getTodolistPage']);
    Route::post('/todolist/{id}', [TodolistController::class, 'storeTodoItem']);
    Route::post('/todolist/{id}/update', [TodolistController::class, 'updateTodoItem']);
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

