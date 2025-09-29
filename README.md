# 📚 Simple Library API

Proyek ini adalah aplikasi **REST API sederhana** untuk manajemen data buku, dibangun menggunakan **Laravel** dan **MySQL**.

## 🚀 Fitur
- List semua buku
- Tambah buku baru
- Lihat detail buku
- Update data buku
- Hapus buku
- Validasi input (title, author wajib; year ≤ tahun sekarang)

## 🛠️ Teknologi
- Laravel 12
- MySQL

## 📂 Setup Project

1. Clone repository:
   ```bash
   git clone https://github.com/SammyBangun/Simple_Library.git
   cd simple-library

2. Install dependency:
   ```bash
   composer install
   npm install

3. Salin file .env:
   ```bash
   cp .env.example .env
   php artisan key:generate

3. Konfigurasi .env untuk database MySQL:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=simple_library
   DB_USERNAME=root
   DB_PASSWORD= # kosongkan jika tidak ada password

4. Migrasi sekaligus seeding database:
   ```bash
   php artisan migrate --seed

5. Jalankan server:
   ```bash
   php artisan serve

## 🔗 Endpoint API

| Method | Endpoint        | Deskripsi        |
|:------:|:---------------:|:----------------:|
| GET    | /api/books      | List semua buku  |
| GET    | /api/books/{id} | Detail 1 buku    |
| POST   | /api/books      | Tambah buku baru |
| PUT    | /api/books/{id} | Update buku      |
| DELETE | /api/books/{id} | Hapus buku       |



   

   
