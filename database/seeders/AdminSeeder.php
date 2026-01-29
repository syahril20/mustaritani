<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah admin sudah ada
        if (!User::where('email', 'admin@mustaritani.my.id')->exists()) {
            User::create([
                'name' => 'Admin Mustaritani',
                'email' => 'admin@mustaritani.my.id',
                'password' => Hash::make('Admin123!'),
                'email_verified_at' => now(),
            ]);
            
            echo "Admin user created successfully!\n";
        } else {
            echo "Admin user already exists.\n";
        }
    }
}