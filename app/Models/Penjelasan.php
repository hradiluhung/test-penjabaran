<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjelasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'spj_id',
        'nama',
        'volume',
        'harga',
    ];

    public function spj()
    {
        return $this->belongsTo(Spj::class);
    }
}
