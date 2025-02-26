<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tanggal',
        'perusahaan',
        'deskripsi',
        'posisi',
        'penempatan',
        'gaji',
    ];

    public function pelamar()
    {
        return $this->hasMany(Lamaran::class, 'lowongan_id');
    }
}
