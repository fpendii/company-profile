<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin', // Nama pengguna
            'email' => 'admin@example.com', // Email pengguna
            'password' => Hash::make('password123'), // Password yang sudah di-hash
        ]);
    }
}
