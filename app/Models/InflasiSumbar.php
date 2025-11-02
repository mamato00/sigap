<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InflasiSumbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'bulan',
        'kabupaten_dharmasraya',
        'kabupaten_pasaman_barat',
        'kota_padang',
        'kota_bukittinggi',
        'provinsi',
    ];
}
