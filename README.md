# Aplikasi Inventaris Komputer

Aplikasi berbasis web untuk mengelola inventaris barang komputer, meliputi kategori barang dan data barang. Aplikasi dikembangkan menggunakan Laravel dan database MySQL.

## Fitur Aplikasi

- Autentikasi login dan logout.
- Dashboard admin.
- Manajemen kategori barang.
- Manajemen barang.
- Menampilkan daftar kategori dan barang.
- Menambah, mengedit, dan menghapus data.
- Penyimpanan data menggunakan MySQL.

## Teknologi yang Digunakan

- PHP 8.4
- Laravel 13
- MySQL
- Composer
- Laragon
- HTML dan CSS
- Bootstrap (jika digunakan pada tampilan aplikasi)

## Persyaratan Sistem

Pastikan perangkat sudah memiliki:

- Windows.
- Laragon.
- PHP yang kompatibel dengan Laravel 13.
- Composer.
- MySQL/MariaDB.
- Browser, seperti Google Chrome.
- Visual Studio Code (opsional).

## Instalasi Aplikasi

### 1. Siapkan source code

Letakkan folder proyek pada direktori:

`C:\laragon\www\inventaris-komputer`

Buka Command Prompt, lalu masuk ke direktori proyek:

```bash
cd C:\laragon\www\inventaris-komputer
```

### 2. Instal dependensi

Jalankan perintah:

```bash
composer install
```

### 3. Konfigurasi file environment

Jika file `.env` belum tersedia, buat dari file contoh:

```bash
copy .env.example .env
```

Buat application key:

```bash
php artisan key:generate
```

Jika file `.env` sudah tersedia dan berisi konfigurasi yang benar, jangan menyalinnya ulang.

### 4. Konfigurasi database

Jalankan Laragon dan pastikan layanan MySQL aktif.

Buat database dengan nama:

`inventaris_komputer`

Buka file `.env`, lalu sesuaikan konfigurasi database:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventaris_komputer
DB_USERNAME=root
DB_PASSWORD=
```

Konfigurasi di atas menggunakan contoh akun MySQL Laragon dengan username `root` tanpa password. Sesuaikan dengan konfigurasi MySQL pada komputer masing-masing.

### 5. Jalankan migration

Buat tabel database menggunakan:

```bash
php artisan migrate
```

Periksa status migration dengan:

```bash
php artisan migrate:status
```

### 6. Isi data awal

Jalankan seeder jika `DatabaseSeeder` sudah dikonfigurasi dengan benar:

```bash
php artisan db:seed
```

Pastikan `InventorySeeder` dan data awal yang dibutuhkan sudah tersedia sebelum menjalankan seeder.

### 7. Jalankan aplikasi

Gunakan perintah:

```bash
php artisan serve
```

Buka browser dan akses:

http://127.0.0.1:8000

Untuk membuka halaman login:

http://127.0.0.1:8000/login

Setelah login berhasil, pengguna dapat mengakses dashboard dan menu manajemen inventaris sesuai hak akses yang tersedia.

## Menjalankan Aplikasi Kembali

Setiap kali ingin menjalankan aplikasi:

1. Buka Laragon dan aktifkan MySQL.
2. Buka Command Prompt.
3. Masuk ke folder proyek.
4. Jalankan `php artisan serve`.
5. Buka `http://127.0.0.1:8000` di browser.

## Perintah Laravel yang Sering Digunakan

| Perintah | Fungsi |
|---|---|
| `php artisan serve` | Menjalankan server aplikasi |
| `php artisan migrate` | Menjalankan migration yang belum diterapkan |
| `php artisan migrate:status` | Memeriksa status migration |
| `php artisan db:seed` | Memasukkan data awal |
| `php artisan route:list` | Melihat daftar route |
| `php artisan optimize:clear` | Membersihkan cache optimasi Laravel |
| `php artisan make:model Item` | Membuat model Item |
| `php artisan make:controller ItemController --resource` | Membuat controller resource |

## Struktur Folder Penting

```text
inventaris-komputer/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env
├── .env.example
├── artisan
├── composer.json
└── README.md
```

## Catatan

- Jangan membagikan file `.env` karena dapat berisi informasi rahasia