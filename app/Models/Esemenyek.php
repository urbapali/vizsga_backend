<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemenyek extends Model
{
    /** @use HasFactory<\Database\Factories\EsemenyekFactory> */
    use HasFactory;

    protected $fillable = [
        'kategoria_id',
        'esemeny_nev',
        'leiras',
        'resztvevok',
        'ar',
        'kepUrl',
    ];
}
