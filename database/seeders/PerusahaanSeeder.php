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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Pertamina (Persero)',
                'kode' => 'P0006',
                'alamat' => 'Jl. Medan Merdeka Timur No. 1A, Jakarta Pusat',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2017',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Garuda Indonesia (Persero) Tbk',
                'kode' => 'P0007',
                'alamat' => 'Jl. Kebon Sirih No. 46, Jakarta Pusat',
                'kota' => 'Jakarta',
                'tahun_gabung' => '2016',
                'standar' => 'Nasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT. Freeport Indonesia',
                'kode' => 'P0008',
                'alamat' => 'Jl. Raya Timika, Papua',
                'kota' => 'Timika',
                'tahun_gabung' => '2022',
                'standar' => 'Internasional',
                'mou' => 'Ya',
                'umkm' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
