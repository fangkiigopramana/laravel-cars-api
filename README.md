# Sistem API Mobil menggunakan Laravel

Sistem API Mobil menggunakan Laravel adalah sebuah proyek yang dibangun dengan menggunakan framework Laravel untuk menyediakan API yang memungkinkan pengguna untuk mengelola data mobil.

## Fitur

- Penambahan, pengeditan, dan penghapusan mobil.
- Penanganan gambar mobil.
- Penanganan fitur mobil seperti merek, model, tahun, dll.
- Validasi data masukan.
- Otentikasi pengguna.

## Persyaratan

- PHP >= 7.4
- Composer
- Laravel >= 8.0
- MySQL atau database lainnya

## Instalasi

1. Clone repositori ini ke dalam direktori lokal:

   ```bash
   git clone https://github.com/fangkiigopramana/laravel-cars-api.git

2. Masuk ke direktori proyek:

   ```bash
    cd laravel-cars-api

3. Salin file .env.example menjadi .env

   ```bash
    cp .env.example .env

4. Konfigurasi file .env sesuai dengan lingkungan pengembangan Anda.

    ```bash
    DB_DATABASE=cars_api

5. Install dependensi PHP menggunakan Composer:

   ```bash
   composer install

6. Generate kunci aplikasi:

   ```bash
   php artisan key:generate

7. Jalankan migrasi dan pengisian data awal:

   ```bash
   php artisan migrate --seed

8. Jalankan server pengembangan Laravel:

   ```bash
   php artisan serve

9. Penggunaan
    API dokumentasi dapat ditemukan di http://localhost:8000/api/documentation.
    Anda dapat menggunakan alat seperti Postman untuk menguji endpoint API:
    1. Semua Data Cars          :   "http://127.0.0.1:8000/api/cars",
    2. Detail Salah Satu Cars   :   "http://127.0.0.1:8000/api/cars/{id}",
    3. Semua Data Types         :   "http://127.0.0.1:8000/api/types",
    4. Detail Salah Satu Type   :   "http://127.0.0.1:8000/api/types/{id}"