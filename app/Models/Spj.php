<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spj extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'uraian',
        'anggaran',
        'realisasi',
        'perubahan_rp',
        'perubahan_persen',
    ];

    public function penjelasan()
    {
        return $this->hasMany(Penjelasan::class);
    }
}
