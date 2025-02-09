<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lowongans')->insert([
            [
                'judul' => 'LOWONGAN KERJA PT MITRA PEDAGANG INDONESIA Tbk.',
                'tanggal' => 'Jumat, 27 Desember 2024',
                'perusahaan' => 'PT MITRA PEDAGANG INDONESIA Tbk.',
                'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Sem cubilia augue cursus quam pellentesque torquent pharetra nullam',
                'posisi' => 'Marketing',
                'penempatan' => 'Bangkalan',
                'gaji' => '750000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT GG ABADI',
                'tanggal' => 'Sabtu, 10 November 2024',
                'perusahaan' => 'PT GG Abadi',
                'deskripsi' => 'Melakukan perawatan dan perbaikan mesin kendaraan.',
                'posisi' => 'Mekanik',
                'penempatan' => 'Surabaya',
                'gaji' => '5000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT TEKNOLOGI MAJU',
                'tanggal' => 'Minggu, 5 November 2024',
                'perusahaan' => 'PT Teknologi Maju',
                'deskripsi' => 'Mengembangkan aplikasi berbasis web dan mobile.',
                'posisi' => 'Software Engineer',
                'penempatan' => 'Bandung',
                'gaji' => '10000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT SINAR JAYA',
                'tanggal' => 'Senin, 15 Oktober 2024',
                'perusahaan' => 'PT Sinar Jaya',
                'deskripsi' => 'Membantu administrasi dan pengelolaan data perusahaan.',
                'posisi' => 'Administrasi',
                'penempatan' => 'Yogyakarta',
                'gaji' => '4500000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT ANUGERAH SEJAHTERA',
                'tanggal' => 'Kamis, 20 September 2024',
                'perusahaan' => 'PT Anugerah Sejahtera',
                'deskripsi' => 'Bertanggung jawab atas pengelolaan keuangan perusahaan.',
                'posisi' => 'Akuntan',
                'penempatan' => 'Medan',
                'gaji' => '8000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT MAJU BERSAMA',
                'tanggal' => 'Rabu, 12 Agustus 2024',
                'perusahaan' => 'PT Maju Bersama',
                'deskripsi' => 'Menangani pengembangan strategi pemasaran perusahaan.',
                'posisi' => 'Marketing Strategist',
                'penempatan' => 'Semarang',
                'gaji' => '9000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'LOWONGAN KERJA PT SUKSES MAKMUR',
                'tanggal' => 'Jumat, 1 Juli 2024',
                'perusahaan' => 'PT Sukses Makmur',
                'deskripsi' => 'Melakukan pengelolaan sumber daya manusia.',
                'posisi' => 'HRD',
                'penempatan' => 'Malang',
                'gaji' => '7000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
