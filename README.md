# BKK SMKN 2 Bangkalan

<p align="center">
  <a href="https://smkn2-bangkalan.sch.id/" target="_blank">
    <img src="public/storage/logo_smkn2bkl.png" width="400" alt="Logo SMKN 2 Bangkalan">
  </a>
</p>

## Tentang Website

Website Bursa Kerja Khusus (BKK) SMKN 2 Bangkalan bertujuan untuk menyediakan platform digital yang memudahkan alumni dalam mengakses informasi lowongan kerja secara cepat, akurat, dan terorganisir. Melalui sistem ini, alumni dapat menemukan peluang kerja yang sesuai dengan kompetensi mereka tanpa harus mencari melalui media yang tidak terstruktur.

## Fitur Utama

-   Pencarian dan pengajuan lamaran kerja
-   Manajemen lowongan pekerjaan
-   Dashboard admin untuk mengelola data

## Teknologi yang Digunakan

-   Laravel (PHP Framework)
-   MySQL Database
-   JavaScript

## Persyaratan Sistem

-   PHP >= 8.1
-   Composer
-   MySQL Database

## Instalasi

1. Clone repository

```bash
git clone https://github.com/Ryoonzz/bkk_smkn2bangkalan.git
```

2. Install dependencies

```bash
composer install
```

3. Salin file .env

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Konfigurasi database di file .env

6. Jalankan migrasi dan seeder

```bash
php artisan migrate
php artisan db:seed
```

7. Jalankan server

```bash
php artisan serve
```

## Lokasi File

-   File gambar (logo, background) berada di folder `public/storage`
-   File konfigurasi berada di folder `config`
-   File migrasi dan seeder berada di folder `database`
