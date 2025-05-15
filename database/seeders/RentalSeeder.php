<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    public function run(): void
    {
        Rental::create([
            'user_id' => 1, // Admin Rental
            'nama_rental' => 'RentCam Studio',
            'alamat' => 'Jl. Fotografi No. 1, Jakarta',
            'no_tlp' => '081234567890',
            'deskripsi' => 'Pusat penyewaan kamera dan aksesoris terlengkap di Jakarta.'
        ]);
    }
}
