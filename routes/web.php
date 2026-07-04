<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Halaman Landing
Route::get('/', function () {
    return view('welcome');
});

// Route yang membutuhkan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Layanan
    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/manage', [ServiceController::class, 'manage'])->name('manage');
        // Tambahkan route create/edit/delete lainnya di sini jika perlu
    });

    // Pesanan
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    // Pengguna
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Profil & Pengaturan
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Routes (Pastikan file auth.php di-require jika Anda menggunakan Laravel Breeze/Jetstream)
require __DIR__.'/auth.php';