<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;
    protected $table = 'dress_size';
    protected $fillable = [
        "panjang_baju",
        "lebar_dada",
        "lebar_pundak",
        "panjang_punggung",
        "lebar_punggung",
        "lingkar_lengan",
        "arm_hold",
        "panjang_tangan_pdh",
        "panjang_tangan_pdl_i",
        "panjang_tangan_pdl_ii",
        "panjang_tangan_pdu_i",
        "panjang_tangan_pdu_iv",
        "panjang_tangan_jas_resintel_kam",
        "lingkar_ujung_lengan",
        "lingkar_dada",
        "lingkar_pinggang__perut",
        "lingkar_panggul",
        "lingkar_leher",
    ];
}
