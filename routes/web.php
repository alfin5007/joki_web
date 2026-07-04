<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfilController; 
use App\Http\Controllers\UserController; // 🟢 Kita daftarkan UserController di sini

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect('/login');
});

Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Home
    Route::redirect('/home', '/dashboard');

    // Profile (Sudah diperbaiki mengarah ke ProfilController baru kita)
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');

    // Services
    Route::get('/services', [ServiceController::class, 'index'])
        ->name('services.index');

    // Orders
    Route::resource('orders', OrderController::class);

    // Pengguna (Users) 🟢 Jalur baru untuk halaman pengguna kamu
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

});

// Route pembersih cache bawaan project kamu
Route::get('/clear-all', function () {
    Artisan::call('optimize:clear');
    return 'Cache Laravel berhasil dibersihkan.';
});