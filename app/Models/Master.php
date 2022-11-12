<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $table = 'master';
    protected $fillable = [
        "nama",
        "jenis_kelamin",
        "pangkat_nrp",
        "jabatan",
        "tb_bb",
        "sizing_dress_id",
        "sizing_trouser_id",
    ];
}
