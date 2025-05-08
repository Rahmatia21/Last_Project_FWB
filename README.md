<p align="center"><strong>CamRent - Sistem Informasi Rental Kamera</strong></p>

<div align="center">

![logo_unsulbar](public/img/logo.jpg)

<b>Rahmatia</b><br>
<b>D02220XX</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---

## Role dan Fitur-fiturnya

### Pelanggan
- Registrasi & Login
- Melihat daftar kamera
- Melihat detail/deskripsi kamera
- Melakukan penyewaan kamera
- Melihat status penyewaan
- Melakukan pembayaran

### Pemilik Usaha Rental Kamera
- Registrasi & Login
- Mengelola data kamera: Tambah/Edit/Hapus
- Melihat daftar penyewa dan status sewa

### Admin
- Login
- Mengelola akun pengguna (pelanggan & pemilik rental)
- Mengelola kategori kamera

---

## Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel users
| Nama Field      | Tipe Data | Keterangan                                     |
|-----------------|-----------|------------------------------------------------|
| id              | BIGINT    | Primary key                                    |
| nama            | VARCHAR   | Nama user                                      |
| email           | VARCHAR   | Email unik user                                |
| password        | VARCHAR   | Kata sandi (hashed)                            |
| peran           | ENUM      | pelanggan, pemilik usaha, admin                |
| created_at      | TIMESTAMP | Timestamp pembuatan                            |
| updated_at      | TIMESTAMP | Timestamp pembaruan                            |

### 2. Tabel rentals (tempat usaha rental kamera)
| Nama Field   | Tipe Data | Keterangan                              |
|--------------|-----------|-----------------------------------------|
| id           | BIGINT    | Primary key                             |
| user_id      | BIGINT    | Foreign key ke tabel users (pemilik)    |
| nama_rental  | VARCHAR   | Nama tempat rental kamera               |
| alamat       | TEXT      | Lokasi rental                           |
| no_tlp       | VARCHAR   | Kontak                                  |
| deskripsi    | TEXT      | Profil / informasi rental               |
| created_at   | TIMESTAMP | Timestamp pembuatan                     |
| updated_at   | TIMESTAMP | Timestamp pembaruan                     |

### 3. Tabel cameras (kamera)
| Nama Field       | Tipe Data | Keterangan                              |
|------------------|-----------|-----------------------------------------|
| id               | BIGINT    | Primary key                             |
| rental_id        | BIGINT    | Foreign key ke rentals                  |
| nama_kamera      | VARCHAR   | Nama kamera                             |
| slug             | VARCHAR   | Untuk URL                               |
| harga_sewa       | INT       | Harga sewa kamera per hari              |
| gambar           | VARCHAR   | Gambar kamera                           |
| jenis_sensor     | VARCHAR   | Contoh: CMOS, Full Frame, dll           |
| resolusi         | VARCHAR   | Resolusi kamera                         |
| status           | VARCHAR   | Tersedia / Tidak tersedia               |
| deskripsi        | TEXT      | Detail kamera                           |
| tripod           | TINYINT   | Tersedia tripod                         |
| flash            | TINYINT   | Tersedia flash                          |
| memory_card      | TINYINT   | Tersedia memory card                    |
| created_at       | TIMESTAMP | Timestamp pembuatan                     |
| updated_at       | TIMESTAMP | Timestamp pembaruan                     |

### 4. Tabel bookings (penyewaan)
| Nama Field       | Tipe Data | Keterangan                          |
|------------------|-----------|-------------------------------------|
| id               | BIGINT    | Primary key                         |
| user_id          | BIGINT    | Foreign key ke users (pelanggan)    |
| camera_id        | BIGINT    | Foreign key ke cameras              |
| tanggal_mulai    | DATE      | Tanggal mulai penyewaan             |
| tanggal_selesai  | DATE      | Tanggal selesai penyewaan           |
| durasi           | VARCHAR   | Durasi sewa                         |
| total_harga      | DECIMAL   | Total harga sewa                    |
| status_booking   | ENUM      | pending, aktif, selesai             |
| created_at       | TIMESTAMP | Timestamp pembuatan                 |
| updated_at       | TIMESTAMP | Timestamp pembaruan                 |

### 5. Tabel payments (pembayaran)
| Nama Field        | Tipe Data | Keterangan                          |
|-------------------|-----------|-------------------------------------|
| id                | BIGINT    | Primary key                         |
| booking_id        | BIGINT    | Foreign key ke bookings             |
| metode_pembayaran | VARCHAR   | Metode pembayaran                   |
| status_pembayaran | ENUM      | berhasil, gagal, batal              |
| bukti_pembayaran  | VARCHAR   | File bukti pembayaran               |
| created_at        | TIMESTAMP | Timestamp pembuatan                 |
| updated_at        | TIMESTAMP | Timestamp pembaruan                 |

---

## Jenis relasi dan tabel yang berelasi

- users (pemilik) ↔ rentals → One-to-Many  
- rentals ↔ cameras → One-to-Many  
- users (pelanggan) ↔ bookings → One-to-Many  
- cameras ↔ bookings → One-to-Many  
- bookings ↔ payments → One-to-One

---
