<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::livewire('services', 'pages::services.index')->name('services.index');
    Route::livewire('services/manage', 'pages::services.manage')->name('services.manage');
});
        
require __DIR__.'/settings.php';
