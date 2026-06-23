<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Buat User Pekerja (Joki)
        \App\Models\User::factory()->create([
            'name' => 'Pekerja Joki',
            'email' => 'pekerja@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'pekerja',
        ]);

        // 3. Buat User Klien (Customer)
        \App\Models\User::factory()->create([
            'name' => 'Klien Customer',
            'email' => 'klien@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role' => 'klien',
        ]);
    }

}
