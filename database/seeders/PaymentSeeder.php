<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        Payment::create([
            'booking_id' => 1,
            'metode_pembayaran' => 'Transfer Bank',
            'status_pembayaran' => 'berhasil',
            'bukti_pembayaran' => 'bukti_transfer.jpg'
        ]);
    }
}
