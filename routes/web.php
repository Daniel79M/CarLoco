<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthentificateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\UserController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cars = Car::with('images')->get();
    return view('welcome' , compact('cars'));
});
Route::get('/login', [AuthentificateController::class, 'showLoginForm'])->name('login');

Route::get('/singIn', [AuthentificateController::class, 'showSignInForm'])->name('singIn');

Route::post('login', [AuthentificateController::class, 'login']);

Route::post('singIn', [AuthentificateController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    
    Route::post('logout', [AuthentificateController::class, 'logout'])->name('logout');

    Route::get('search', [AuthentificateController::class, 'search'])->name('search');

    Route::get('Welcome', [AuthentificateController::class, 'home'])->name('Welcome');

    Route::resource('cars', CarController::class);

    Route::resource('/categories', CategoryController::class);

    Route::resource('commandes', CommandeController::class);

    // Route::get('/users', [UserController::class, 'showAllUser'])->name('users.index');
    
    Route::resource('users', AuthentificateController::class);
});

