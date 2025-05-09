<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Tabel Rentals
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama_rental');
            $table->text('alamat');
            $table->string('no_tlp');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        // Tabel Cameras
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_id')->constrained('rentals')->onDelete('cascade');
            $table->string('nama_kamera');
            $table->string('slug')->unique();
            $table->integer('harga_sewa');
            $table->string('gambar')->nullable();
            $table->string('jenis_sensor');
            $table->string('resolusi');
            $table->string('status'); // tersedia / tidak tersedia
            $table->text('deskripsi')->nullable();
            $table->boolean('tripod')->default(false);
            $table->boolean('flash')->default(false);
            $table->boolean('memory_card')->default(false);
            $table->timestamps();
        });

        // Tabel Bookings
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('camera_id')->constrained('cameras')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('durasi');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status_booking', ['pending', 'aktif', 'selesai'])->default('pending');
            $table->timestamps();
        });

        // Tabel Payments
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->string('metode_pembayaran');
            $table->enum('status_pembayaran', ['berhasil', 'gagal', 'batal'])->default('berhasil');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('cameras');
        Schema::dropIfExists('rentals');
        Schema::dropIfExists('users');
    }
};
