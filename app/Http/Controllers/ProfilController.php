<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil pengguna.
     */
    public function index()
    {
        // Mengarah ke resources/views/profil/index.blade.php
        return view('profil.index');
    }
}
