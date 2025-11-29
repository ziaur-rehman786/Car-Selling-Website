<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WatchlistController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication
Route::get('/login.html', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login.html', [AuthController::class, 'login']);
Route::get('/signup.html', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup.html', [AuthController::class, 'signup']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Cars
Route::get('/view.html/{id}', [CarController::class, 'show'])->name('cars.show');
Route::get('/s.html', [CarController::class, 'search'])->name('cars.search');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/add_new.html', [CarController::class, 'create'])->name('cars.create');
    Route::post('/add_new.html', [CarController::class, 'store'])->name('cars.store');
    Route::get('/edit_car.html/{id}', [CarController::class, 'edit'])->name('cars.edit');
    Route::post('/edit_car.html/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
    Route::get('/my_cars.html', [CarController::class, 'myCars'])->name('cars.my-cars');
    Route::get('/watchlist.html', [WatchlistController::class, 'index'])->name('watchlist.index');
    Route::post('/watchlist/{carId}', [WatchlistController::class, 'toggle'])->name('watchlist.toggle');
});
