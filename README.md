
# Test CRUD Laravel

web ini memiliki struktur dengan 2 Model, 2 Controller, 2 Migration, dan juga memiliki 2 folder view yang semuanya saling berhubungan diantaranya ada location dan employee. Kedua table tersebut memiliki relasi One to Manya yang berarti satu lokasi bisa ada banyak karyawan.

## Struktur Folder

- app/http/controller => berisi logic web 
- app/http/Models => berisi kolom-kolom tabel dan relasi antar tabel
- database/migration => berisi tipe data dan nama kolom di tabel
- resources/views => berisi tampilan web
- route => berisi route yang mejalankan web

## Instruksi mejalankan aplikasi

1. Pastikan XAMPP, VsCode, MySQL, PHP (8.x), Composer, dan Laravel terinstal.
2. Clone the project

```bash
  git clone https://github.com/Shendyrf/shendy-CRUD-laravel.git
```

3. Go to the project directory

```bash
  cd shendy-CRUD-laravel
```

4. Install dependencies

```bash
  composer install
``` 

5. Konfigurasi Lingkungan
Salin file .env.example menjadi .env dan sesuaikan konfigurasi (database, app key)

```bash
cp .env.example .env
php artisan key:generate
```

6. Migrasi Database

```bash
  php artisan migrate
```

7. Jalankan Server

```bash
  php artisan serve
```

## Demo

http://localhost:8000.


## Deployment

Aplikasi ini di-deploy di GitHub. Untuk mengupdate aplikasi atau meng-upload versi terbaru

1. Buat Repositori di GitHub:
- Masuk ke akun GitHub.
- Klik "New" untuk membuat repositori baru.
- Beri nama repositori dan deskripsi, lalu klik "Create repository".

2. Inisialisasi Git di Proyek

```bash
cd path/to/your/project
git init
```

3. Tambahkan dan Commit Perubahan:

```bash
git add .
git commit -m "Initial commit"
```

4. Push Kode ke GitHub:

```bash
git push -u origin main
```

