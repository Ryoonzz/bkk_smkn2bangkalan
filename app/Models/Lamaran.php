<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $table = 'lamaran';
    protected $fillable = ['alumni_id', 'lowongan_id'];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }
}
