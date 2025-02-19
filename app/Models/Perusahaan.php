<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kode',
        'alamat',
        'kota',
        'tahun_gabung',
        'standar',
        'mou',
        'umkm',
        'kerjasama',
    ];
}
