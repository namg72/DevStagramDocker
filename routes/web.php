<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/login', function () {
    return view('auth/login');
});


/*  
      SIN USAR CONTROLADOR
      s
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/login', function () {
    return view('auth/login');
});
  */