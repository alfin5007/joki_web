<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// 1. Halaman Landing / Publik
Route::get('/', function () {
    return view('welcome');
});

// 2. Route yang membutuhkan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Manajemen Layanan
    Route::prefix('services')->name('services.')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/manage', [ServiceController::class, 'manage'])->name('manage');
    });

    // Pesanan (CRUD Lengkap)
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/create', [OrderController::class, 'create'])->name('create');
        Route::post('/', [OrderController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('/{id}', [OrderController::class, 'destroy'])->name('destroy');
    });

    // Pengguna
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Profil & Pengaturan
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Logout
    Route::post('/logout', function () {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect('/');
    })->name('logout');
});