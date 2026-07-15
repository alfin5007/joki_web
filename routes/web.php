<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

// Halaman Landing
Route::get('/', function () {
    return view('welcome');
});

// Route yang membutuhkan autentikasi
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Kategori Layanan (Livewire/Blaze)
    Route::livewire('/services', 'pages::services.index')->name('services.index');

    // Manajemen Layanan (Livewire/Blaze)
    Route::livewire('/services/manage', 'pages::services.manage')->name('services.manage');

    // Pesanan (Orders)
    Route::post('/orders/{order}/bukti', [OrderController::class, 'uploadBuktiBayar'])->name('orders.bukti');
    Route::post('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.status');
    Route::get('/orders/{order}/download', [OrderController::class, 'downloadHasil'])->name('orders.download');
    Route::get('/orders/{order}/invoice', [OrderController::class, 'invoice'])->name('orders.invoice');
    Route::resource('orders', OrderController::class);

    // Pengguna
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

// Settings / Profile Routes
require __DIR__.'/settings.php';