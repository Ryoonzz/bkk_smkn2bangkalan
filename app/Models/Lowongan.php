<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tgl_akhir_daftar',
        'perusahaan',
        'deskripsi',
        'jurusan',
        'posisi',
        'penempatan',
        'gaji',
    ];

    public function pelamar()
    {
        return $this->hasMany(Lamaran::class, 'lowongan_id');
    }
}
