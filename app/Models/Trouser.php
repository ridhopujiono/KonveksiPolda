<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trouser extends Model
{
    use HasFactory;
    protected $table = 'trouser_size';
    protected $fillable = [
        "panjang_celana_rok",
        "lingkar_pinggang",
        "lingkar_pinggul",
        "pesak_kil",
        "lingkar_paha",
        "lingkar_lutut",
        "lingkar_bawah",
    ];
}
