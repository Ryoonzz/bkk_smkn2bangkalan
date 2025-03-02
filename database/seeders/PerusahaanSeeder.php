<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahaans')->insert([
            [
                'nama' => 'PT. Astra International Tbk',
                'kode' => 'P0001',
                'alamat' => 'Jl. Gaya Motor Raya No. 8, Sunter, Jakarta Utara',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2020',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Prakerin, Sinkronisasi kurikulum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Telkom Indonesia Tbk',
                'kode' => 'P0002',
                'alamat' => 'Jl. Japati No. 1, Bandung',
                'kota' => 'Bandung',
                'tahun_gabung' => '2019',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Sinkronisasi kurikulum, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Unilever Indonesia Tbk',
                'kode' => 'P0003',
                'alamat' => 'Grha Unilever, BSD City, Tangerang',
                'kota' => 'Tangerang',
                'tahun_gabung' => '2021',
                'standar' => 'Nasional',
                'mou' => 'Tidak',
                'umkm' => 'Ya',
                'kerjasama' => 'Guru tamu, Prakerin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Bank Central Asia Tbk (BCA)',
                'kode' => 'P0004',
                'alamat' => 'Menara BCA, Jl. MH Thamrin No. 1, Jakarta Pusat',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2018',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Prakerin, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Indofood Sukses Makmur Tbk',
                'kode' => 'P0005',
                'alamat' => 'Jl. Jenderal Sudirman Kav. 76-78, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2015',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Guru tamu, Sinkronisasi kurikulum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Gojek Indonesia',
                'kode' => 'P0009',
                'alamat' => 'Jl. Pasaraya Blok M, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2016',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Prakerin, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Tokopedia',
                'kode' => 'P0010',
                'alamat' => 'Jl. Iskandar Muda No. 9, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2020',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Sinkronisasi kurikulum, Prakerin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Bukalapak',
                'kode' => 'P0011',
                'alamat' => 'Jl. Rasuna Said, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2017',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Prakerin, Sinkronisasi kurikulum, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Shopee Indonesia',
                'kode' => 'P0012',
                'alamat' => 'Pacific Century Place Tower, SCBD, Jakarta',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2021',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Guru tamu, Prakerin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Grab Indonesia',
                'kode' => 'P0013',
                'alamat' => 'Lippo Kuningan Lt. 8, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2018',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Prakerin, Sinkronisasi kurikulum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. PLN (Persero)',
                'kode' => 'P0014',
                'alamat' => 'Jl. Trunojoyo Blok M, Jakarta Selatan',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2019',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Sinkronisasi kurikulum, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Pertamina Lubricants',
                'kode' => 'P0015',
                'alamat' => 'Jl. Cempaka Putih Raya No. 10, Jakarta',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2022',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'kerjasama' => 'Prakerin, Sinkronisasi kurikulum, Guru tamu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Kimia Farma Tbk',
                'kode' => 'P0016',
                'alamat' => 'Jl. Veteran No. 9, Jakarta Pusat',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2016',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Ya',
                'kerjasama' => 'Guru tamu, Prakerin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
