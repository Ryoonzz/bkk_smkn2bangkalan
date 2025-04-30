-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2025 pada 16.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkk_smkn2bkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alumnis`
--

INSERT INTO `alumnis` (`id`, `user_id`, `nama`, `nisn`, `tanggal_lahir`, `no_hp`, `alamat`, `jurusan`, `tahun_lulus`, `created_at`, `updated_at`) VALUES
(1, 2, 'Achmad Dandy C R', '0987654', '2006-08-30', '087898040539', 'Jl. KH. Abd. Muin, No. 39, Pejagan, Bangkalan', 'Rekayasa Perangkat Lunak', '2025', '2025-04-10 07:04:32', '2025-04-10 07:04:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `gambar`, `deskripsi`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'Tim Futsal SMKN 2 Bangkalan Raih Runner-Up di Festival Pelajar Cup 2025', 'storage/berita/1741420082.jpg', 'Prestasi gemilang kembali ditorehkan oleh SMKN 2 Bangkalan! Tim futsal sekolah berhasil meraih Juara 2 (Runner-Up) dalam ajang Festival Pelajar Cup 2025, yang diselenggarakan oleh PC IPNU IPPNU Bangkalan. Turnamen bergengsi ini diikuti oleh berbagai tim futsal dari sekolah-sekolah di Kabupaten Bangkalan dan menjadi ajang pembuktian bagi para pelajar yang berbakat di dunia olahraga.\r\n\r\nDalam pertandingan yang berlangsung sengit, Tim Futsal SMKN 2 Bangkalan menunjukkan permainan yang solid, kerja sama tim yang apik, serta semangat juang yang luar biasa. Melalui perjuangan yang tak kenal lelah, mereka sukses melangkah hingga babak final dan akhirnya menyabet posisi Runner-Up. Prestasi ini menjadi bukti bahwa SMKN 2 Bangkalan tidak hanya unggul dalam bidang akademik dan keterampilan, tetapi juga mampu bersaing di bidang olahraga.\r\n\r\nSelamat kepada Tim Futsal SMKN 2 Bangkalan atas pencapaian yang luar biasa ini! Semoga prestasi ini menjadi motivasi bagi seluruh siswa untuk terus mengembangkan bakat dan semangat sportivitas dalam berbagai bidang.', '2025-04-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Pelaksanaan PKL di Madura Technovation', 'storage/galeri/1741430808.jpg', '2025-04-10 16:07:13', '2025-04-10 16:07:13'),
(2, 'Pelaksanaan PKL di Fiesto', 'storage/galeri/1741430835.jpg', '2025-04-10 16:07:20', '2025-04-10 16:07:20'),
(3, 'Pelaksanaan PKL di Rumah Sakit Syamrabu', 'storage/galeri/1741430877.jpg', '2025-04-10 16:07:27', '2025-04-10 16:07:27'),
(4, 'Pelaksanaan PKL di MPStore', 'storage/galeri/1741430930.jpg', '2025-04-10 16:07:31', '2025-04-10 16:07:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE `lamaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id`, `alumni_id`, `lowongan_id`, `created_at`, `updated_at`) VALUES
(5, 1, 3, '2025-04-10 07:27:09', '2025-04-10 07:27:09'),
(6, 1, 2, '2025-04-10 07:28:09', '2025-04-10 07:28:09'),
(9, 1, 7, '2025-04-10 07:28:29', '2025-04-10 07:28:29'),
(10, 1, 5, '2025-04-10 18:12:26', '2025-04-10 18:12:26'),
(12, 1, 1, '2025-04-30 06:13:48', '2025-04-30 06:13:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongans`
--

CREATE TABLE `lowongans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_akhir_daftar` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jurusan` text DEFAULT NULL,
  `posisi` varchar(255) NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `gaji` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongans`
--

INSERT INTO `lowongans` (`id`, `judul`, `tgl_akhir_daftar`, `perusahaan`, `deskripsi`, `jurusan`, `posisi`, `penempatan`, `gaji`, `created_at`, `updated_at`) VALUES
(1, 'LOWONGAN KERJA PT MITRA PEDAGANG INDONESIA Tbk.', '2025-03-01', 'PT MITRA PEDAGANG INDONESIA Tbk.', 'Mempromosikan aplikasi MPStore di sosial media', 'Semua Jurusan', 'Marketing', 'Bangkalan', 2000000, '2025-04-10 07:09:05', '2025-04-10 07:36:00'),
(2, 'LOWONGAN KERJA PT GG ABADI', '2025-03-03', 'PT GG Abadi', 'Melakukan perawatan dan perbaikan mesin kendaraan.', 'Teknik Kendaraan Ringan Otomotif, Teknik Sepeda Motor', 'Mekanik', 'Surabaya', 5000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(3, 'LOWONGAN KERJA PT TEKNOLOGI MAJU', '2025-03-04', 'PT Teknologi Maju', 'Mengembangkan aplikasi berbasis web dan mobile.', 'Rekayasa Perangkat Lunak, Teknik Jaringan Komputer', 'Software Engineer', 'Bandung', 10000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(4, 'LOWONGAN KERJA PT SINAR JAYA', '2025-03-06', 'PT Sinar Jaya', 'Membantu administrasi dan pengelolaan data perusahaan.', 'Teknik Elektronika Industri, Teknik Kimia Industri', 'Administrasi', 'Yogyakarta', 4500000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(5, 'LOWONGAN KERJA PT ANUGERAH SEJAHTERA', '2025-03-08', 'PT Anugerah Sejahtera', 'Bertanggung jawab atas pengelolaan keuangan perusahaan.', 'Teknik Kimia Industri, Teknik Instalasi Tenaga Listrik', 'Akuntan', 'Medan', 8000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(6, 'LOWONGAN KERJA PT MAJU BERSAMA', '2025-03-10', 'PT Maju Bersama', 'Menangani pengembangan strategi pemasaran perusahaan.', 'Teknik Jaringan Komputer, Rekayasa Perangkat Lunak', 'Marketing Strategist', 'Semarang', 9000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(7, 'LOWONGAN KERJA PT SUKSES MAKMUR', '2025-03-12', 'PT Sukses Makmur', 'Melakukan pengelolaan sumber daya manusia.', 'Teknik Pemesinan, Teknik Kendaraan Ringan Otomotif', 'HRD', 'Malang', 7000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(8, 'LOWONGAN KERJA PT DIGITAL NUSANTARA', '2025-03-14', 'PT Digital Nusantara', 'Membantu pengelolaan server dan keamanan jaringan perusahaan.', 'Teknik Jaringan Komputer, Rekayasa Perangkat Lunak', 'Network Administrator', 'Jakarta', 12000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(9, 'LOWONGAN KERJA PT PRIMA TEKNOLOGI', '2025-03-16', 'PT Prima Teknologi', 'Menganalisis dan mengembangkan software berbasis AI.', 'Rekayasa Perangkat Lunak, Teknik Jaringan Komputer', 'AI Engineer', 'Surabaya', 15000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(10, 'LOWONGAN KERJA PT MEGA KARYA', '2025-03-18', 'PT Mega Karya', 'Mengerjakan desain bangunan dan perencanaan konstruksi.', 'Desain Pemodelan dan Informasi Bangunan', 'Drafter', 'Bandung', 10000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(11, 'LOWONGAN KERJA PT TRANS LOGISTICS', '2025-03-20', 'PT Trans Logistics', 'Mengatur distribusi barang dan logistik perusahaan.', 'Teknik Pemesinan, Teknik Kendaraan Ringan Otomotif', 'Logistics Coordinator', 'Yogyakarta', 8000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(12, 'LOWONGAN KERJA PT GLOBAL MEDIA', '2025-03-22', 'PT Global Media', 'Mengelola konten media sosial dan strategi digital marketing.', 'Rekayasa Perangkat Lunak, Teknik Jaringan Komputer', 'Social Media Specialist', 'Semarang', 7000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(13, 'LOWONGAN KERJA PT KARYA UTAMA', '2025-03-24', 'PT Karya Utama', 'Melakukan riset dan pengembangan sistem manufaktur.', 'Teknik Pemesinan, Teknik Instalasi Tenaga Listrik', 'R&D Engineer', 'Malang', 13000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(14, 'LOWONGAN KERJA PT MAKMUR JAYA', '2025-03-26', 'PT Makmur Jaya', 'Menangani desain sistem kelistrikan gedung dan industri.', 'Teknik Instalasi Tenaga Listrik, Teknik Elektronika Industri', 'Electrical Engineer', 'Bali', 11000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(15, 'LOWONGAN KERJA PT SINAR GEMILANG', '2025-03-28', 'PT Sinar Gemilang', 'Melakukan riset dan analisis bahan kimia industri.', 'Teknik Kimia Industri, Teknik Elektronika Industri', 'Chemical Analyst', 'Jakarta', 14000000, '2025-04-10 07:09:05', '2025-04-10 07:09:05'),
(16, 'LOWONGAN KERJA PT MONARCH', '2025-04-20', 'PT MONARCH', '-', 'Semua Jurusan', 'Shadow Monarch', 'Seoul', 3000000, '2025-04-10 18:16:03', '2025-04-10 18:16:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(78, '0001_01_01_000000_create_users_table', 1),
(79, '0001_01_01_000001_create_cache_table', 1),
(80, '0001_01_01_000002_create_jobs_table', 1),
(81, '2025_01_27_053741_create_lowongans_table', 1),
(82, '2025_01_31_024809_create_perusahaans_table', 1),
(83, '2025_02_24_101637_create_alumnis_table', 1),
(85, '2025_03_08_064044_create_beritas_table', 1),
(86, '2025_03_08_091618_create_galeris_table', 1),
(88, '2025_02_26_122239_create_lamaran_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tahun_gabung` int(11) NOT NULL,
  `standar` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `umkm` varchar(255) NOT NULL,
  `kerjasama` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `nama`, `kode`, `alamat`, `kota`, `tahun_gabung`, `standar`, `mou`, `umkm`, `kerjasama`, `created_at`, `updated_at`) VALUES
(1, 'PT. Astra International Tbk', 'P0001', 'Jl. Gaya Motor Raya No. 8, Sunter, Jakarta Utara', 'Jakarta', 2020, 'Nasional', 'Ya', 'Tidak', 'Prakerin, Sinkronisasi kurikulum', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(2, 'PT. Telkom Indonesia Tbk', 'P0002', 'Jl. Japati No. 1, Bandung', 'Bandung', 2019, 'Internasional', 'Ya', 'Tidak', 'Sinkronisasi kurikulum, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(3, 'PT. Unilever Indonesia Tbk', 'P0003', 'Grha Unilever, BSD City, Tangerang', 'Tangerang', 2021, 'Nasional', 'Tidak', 'Ya', 'Guru tamu, Prakerin', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(4, 'PT. Bank Central Asia Tbk (BCA)', 'P0004', 'Menara BCA, Jl. MH Thamrin No. 1, Jakarta Pusat', 'Jakarta', 2018, 'Internasional', 'Ya', 'Tidak', 'Prakerin, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(5, 'PT. Indofood Sukses Makmur Tbk', 'P0005', 'Jl. Jenderal Sudirman Kav. 76-78, Jakarta Selatan', 'Jakarta', 2015, 'Nasional', 'Ya', 'Ya', 'Guru tamu, Sinkronisasi kurikulum', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(6, 'PT. Gojek Indonesia', 'P0009', 'Jl. Pasaraya Blok M, Jakarta Selatan', 'Jakarta', 2016, 'Internasional', 'Ya', 'Ya', 'Prakerin, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(7, 'PT. Tokopedia', 'P0010', 'Jl. Iskandar Muda No. 9, Jakarta Selatan', 'Jakarta', 2020, 'Internasional', 'Ya', 'Ya', 'Sinkronisasi kurikulum, Prakerin', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(8, 'PT. Bukalapak', 'P0011', 'Jl. Rasuna Said, Jakarta Selatan', 'Jakarta', 2017, 'Nasional', 'Ya', 'Ya', 'Prakerin, Sinkronisasi kurikulum, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(9, 'PT. Shopee Indonesia', 'P0012', 'Pacific Century Place Tower, SCBD, Jakarta', 'Jakarta', 2021, 'Internasional', 'Ya', 'Tidak', 'Guru tamu, Prakerin', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(10, 'PT. Grab Indonesia', 'P0013', 'Lippo Kuningan Lt. 8, Jakarta Selatan', 'Jakarta', 2018, 'Internasional', 'Ya', 'Ya', 'Prakerin, Sinkronisasi kurikulum', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(11, 'PT. PLN (Persero)', 'P0014', 'Jl. Trunojoyo Blok M, Jakarta Selatan', 'Jakarta', 2019, 'Nasional', 'Ya', 'Tidak', 'Sinkronisasi kurikulum, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(12, 'PT. Pertamina Lubricants', 'P0015', 'Jl. Cempaka Putih Raya No. 10, Jakarta', 'Jakarta', 2022, 'Internasional', 'Ya', 'Tidak', 'Prakerin, Sinkronisasi kurikulum, Guru tamu', '2025-04-10 07:09:23', '2025-04-10 07:09:23'),
(13, 'PT. Kimia Farma Tbk', 'P0016', 'Jl. Veteran No. 9, Jakarta Pusat', 'Jakarta', 2016, 'Nasional', 'Ya', 'Ya', 'Guru tamu, Prakerin', '2025-04-10 07:09:23', '2025-04-10 07:09:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_lamaran`
--

CREATE TABLE `riwayat_lamaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_aksi` int(11) NOT NULL DEFAULT 0,
  `terakhir_aksi` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat_lamaran`
--

INSERT INTO `riwayat_lamaran` (`id`, `alumni_id`, `lowongan_id`, `jumlah_aksi`, `terakhir_aksi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2025-04-30 06:13:48', '2025-04-10 07:26:38', '2025-04-30 06:13:48'),
(2, 1, 2, 3, '2025-04-10 07:28:09', '2025-04-10 07:26:40', '2025-04-10 07:28:09'),
(3, 1, 3, 3, '2025-04-10 07:27:09', '2025-04-10 07:26:44', '2025-04-10 07:27:09'),
(4, 1, 4, 2, '2025-04-10 07:27:04', '2025-04-10 07:26:46', '2025-04-10 07:27:04'),
(5, 1, 7, 3, '2025-04-10 07:28:29', '2025-04-10 07:28:22', '2025-04-10 07:28:29'),
(6, 1, 5, 1, '2025-04-10 18:12:26', '2025-04-10 18:12:26', '2025-04-10 18:12:26'),
(7, 1, 16, 2, '2025-04-10 18:17:10', '2025-04-10 18:16:50', '2025-04-10 18:17:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Fm4YMR5YHWdtDVLchzC21qJAMHjnIDQOJVxDMWhf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHhCYmpOMmFTOTBvY1Z3eENHSHl3S1NGc2VVWDZIYUx2bzFPTk1lVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1746019234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '1234567', NULL, NULL, '$2y$12$.wO3NsZsmEF38z9eBsY/EOl4tkoVdw7UGn2gsGs4klUH9etmERhpq', 'naiCluAtruxKVqLwz6B4s2zilnCHK0pNXFY2JsruJpooeEMJblzrA2NGBdAf', '2025-04-10 07:02:55', '2025-04-10 07:02:55'),
(2, 'alumni', 'Achmad Dandy C R', '0987654', NULL, NULL, '$2y$12$q.4sUg/Xg6ZyokX/jdUJSOf8y8QvD7CzlpPqEQG1I8CRp5nunfOTq', 'FJO4q6aEiM1HFV4Fu6MeFdplovq0riLWOnk09ZwEkcqWi7R8MXLemPD3ed8n', '2025-04-10 07:04:32', '2025-04-10 07:04:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnis_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lamaran_alumni_id_foreign` (`alumni_id`),
  ADD KEY `lamaran_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_lamaran`
--
ALTER TABLE `riwayat_lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_lamaran_alumni_id_foreign` (`alumni_id`),
  ADD KEY `riwayat_lamaran_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `riwayat_lamaran`
--
ALTER TABLE `riwayat_lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumnis`
--
ALTER TABLE `alumnis`
  ADD CONSTRAINT `alumnis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `alumnis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lamaran_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat_lamaran`
--
ALTER TABLE `riwayat_lamaran`
  ADD CONSTRAINT `riwayat_lamaran_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `alumnis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_lamaran_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
