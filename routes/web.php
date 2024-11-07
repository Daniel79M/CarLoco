<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthentificateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.Connexion');
});
Route::get('/login', [AuthentificateController::class, 'showLoginForm'])->name('login');

Route::get('/singIn', [AuthentificateController::class, 'showSignInForm'])->name('singIn');

Route::post('login', [AuthentificateController::class, 'login']);


Route::middleware(['auth'])->group(function () {

    Route::post('logout', [AuthentificateController::class, 'logout'])->name('logout');

    Route::get('Welcome', [AuthentificateController::class, 'home'])->name('Welcome');

    Route::resource('cars', CarController::class);
    
    Route::resource('users', AuthentificateController::class);
});

