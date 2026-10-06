# Tugas rutin 9 - laravel
## Deskripsi 

project ini dibuat untuktugas rutin 9 pada mata kuliah pemrograman web menggunakan framework  laravel.
project ini ini merupakan aplikasi sederhana yan menampilkan halaman utama, halaam contact, serta data mahasiswa yang diambil dari database Mysql.
## Teknologi yang digunakan

- Laravel 9
- PHP 8.0.30
- MySQL 
- XAMPP
- Composer
- Blade Template 

## Database 

Nama database:
`laravel_9`

Tabel yang digunakan:

`mahasiswa`

kolom pada tabel mahasiswa:

- id
- nama
- nim
- jurusan
- created_at
- update_at

## Fitur dan halaman 
### 1. Halaman utama

URL:
`/`

Menampilkan halaman utama Laravel.

### 2. Halaman About

URL. 
`/about`

menampilkan informasi tentang aplikasi.

### 3. Halaman contact 

URL:

`/contact`

menampilkan halaman kontak.

### 4. Halaman data mahasiswa

URL:

`/mahasiswa`

menampilkan data mahasiswa yang diambil dari database melalui model dan controller.

## Struktur alur data

Database MySQL  
↓  
Model Mahasiswa  
↓  
MahasiswaController  
↓  
View mahasiswa.blade.php  
↓  
Browser

## Data mahasiswa
contoh yang digunakan :
| Nama | Nim | Jurusan |
|---|---|---|
| Anisah | 123456 | Informatika |

## Cara menjalankan project

1. Jalankan apache dan MySQL melalui XAMPP.
2. Buka terminal pada folder project.
3. Jalankan perintah:

```bash
php artisan serve 