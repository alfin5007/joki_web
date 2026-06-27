<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Profile
Route::get('/profile', function () {
    return view('profile.edit');
})->name('profile.edit');


// Services
Route::get('/services', function () {
    return view('services.index');
})->name('services.index');


// Orders
Route::resource('orders', OrderController::class);