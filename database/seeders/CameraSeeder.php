<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camera;
use Illuminate\Support\Str;

class CameraSeeder extends Seeder
{
    public function run(): void
    {
        $gambar = 'https://www.bhphotovideo.com/images/images1000x1000/canon_4728c006_eos_m50_mark_ii_1598385.jpg';

        Camera::create([
            'rental_id' => 1,
            'nama_kamera' => 'Canon EOS M50',
            'slug' => Str::slug('Canon EOS M50'),
            'harga_sewa' => 150000,
            'gambar' => $gambar,
            'jenis_sensor' => 'APS-C',
            'resolusi' => '24.1 MP',
            'status' => 'tersedia',
            'deskripsi' => 'Kamera mirrorless ideal untuk foto dan video.',
            'tripod' => true,
            'flash' => true,
            'memory_card' => true,
        ]);
    }
}
