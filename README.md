# 📄 README – Sistem Informasi Rental Kamera

---

## 🏷️ Judul Proyek

**Sistem Informasi Rental Kamera**

---

## 👤 Nama  
**Rahmatia**

## 🆔 NIM  
**[Tulis NIM Anda]**

---

## 📚 Mata Kuliah  
**[Nama Mata Kuliah]**

## 📅 Tahun  
**2025**

---

## 👥 Role dan Fitur-fiturnya

### 🔐 Admin
- Login dan autentikasi
- Manajemen data kamera (tambah, edit, hapus)
- Manajemen data pelanggan
- Pengelolaan transaksi penyewaan dan pengembalian
- Pembuatan laporan transaksi

### 👤 Pelanggan
- Registrasi dan login
- Melihat daftar kamera
- Melakukan penyewaan kamera
- Melihat riwayat penyewaan
- Mengembalikan kamera

---

## 🗃️ Tabel-Tabel Database beserta Field dan Tipe Datanya

### 1. Tabel `kamera`

| Nama Field     | Tipe Data     | Keterangan                     |
|----------------|---------------|--------------------------------|
| id_kamera      | INT           | Primary Key, Auto Increment    |
| nama_kamera    | VARCHAR(100)  | Nama kamera                    |
| jenis_kamera   | VARCHAR(50)   | DSLR/Mirrorless/Action, dll    |
| harga_sewa     | DECIMAL(10,2) | Harga sewa per hari            |
| status         | ENUM          | tersedia / disewa              |

### 2. Tabel `pelanggan`

| Nama Field     | Tipe Data     | Keterangan                     |
|----------------|---------------|--------------------------------|
| id_pelanggan   | INT           | Primary Key, Auto Increment    |
| nama_lengkap   | VARCHAR(100)  | Nama pelanggan                 |
| email          | VARCHAR(100)  | Email login                    |
| password       | VARCHAR(255)  | Password terenkripsi           |
| no_telepon     | VARCHAR(15)   | Nomor HP                       |

### 3. Tabel `penyewaan`

| Nama Field     | Tipe Data     | Keterangan                     |
|----------------|---------------|--------------------------------|
| id_sewa        | INT           | Primary Key, Auto Increment    |
| id_kamera      | INT           | Foreign Key → kamera           |
| id_pelanggan   | INT           | Foreign Key → pelanggan        |
| tanggal_sewa   | DATE          | Tanggal mulai sewa             |
| tanggal_kembali| DATE          | Tanggal kembali                |
| total_biaya    | DECIMAL(10,2) | Biaya total                    |
| status         | ENUM          | berjalan / selesai             |

---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

- `pelanggan` 🔗 `penyewaan` → **One to Many**  
  (Satu pelanggan bisa memiliki banyak transaksi penyewaan)

- `kamera` 🔗 `penyewaan` → **One to Many**  
  (Satu kamera bisa disewa berkali-kali)

---

> 📌 *Catatan: Proyek ini dikembangkan menggunakan [teknologi yang digunakan, misalnya Laravel + MySQL + Bootstrap].*
