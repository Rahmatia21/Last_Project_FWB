<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Rental',
            'email' => 'admin@rental.com',
            'password' => Hash::make('password'), // password: password
        ]);

        User::create([
            'name' => 'Pelanggan Satu',
            'email' => 'pelanggan@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
