<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatLamaran extends Model
{
    use HasFactory;

    protected $table = 'riwayat_lamaran';
    protected $fillable = [
        'alumni_id',
        'lowongan_id',
        'jumlah_aksi',
        'terakhir_aksi'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }
}