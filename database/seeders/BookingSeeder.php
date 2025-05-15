<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        Booking::create([
            'user_id' => 2, // Pelanggan
            'camera_id' => 1,
            'tanggal_mulai' => now()->toDateString(),
            'tanggal_selesai' => now()->addDays(2)->toDateString(),
            'durasi' => '2 hari',
            'total_harga' => 300000,
            'status_booking' => 'aktif'
        ]);
    }
}
