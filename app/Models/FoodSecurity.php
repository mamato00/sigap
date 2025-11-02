<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodSecurity extends Model
{
    use HasFactory;

    protected $fillable = [
        'desa',
        'kecamatan',
        'provinsi',
        'kabkot',
        'bui',
        'ndbi',
        'ntl',
        'rwi',
        'hutan',
        'sawah',
        'evi',
        'lst',
        'ndmi',
        'ndvi',
        'savi',
        'jarak_air_bersih',
        'jarak_fasilitas_kesehatan',
        'jarak_fasilitas_pendidikan',
        'jarak_fasilitas_penyedia_pangan',
        'density_fpendidikan',
        'density_sosek',
        'density_fkesehatan',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'bui' => 'decimal:10',
        'ndbi' => 'decimal:10',
        'ntl' => 'decimal:10',
        'rwi' => 'decimal:3',
        'hutan' => 'decimal:4',
        'sawah' => 'decimal:4',
        'evi' => 'decimal:10',
        'lst' => 'decimal:2',
        'ndmi' => 'decimal:10',
        'ndvi' => 'decimal:10',
        'savi' => 'decimal:10',
        'jarak_air_bersih' => 'decimal:2',
        'jarak_fasilitas_kesehatan' => 'decimal:2',
        'jarak_fasilitas_pendidikan' => 'decimal:2',
        'jarak_fasilitas_penyedia_pangan' => 'decimal:2',
        'density_fpendidikan' => 'integer',
        'density_sosek' => 'integer',
        'density_fkesehatan' => 'integer',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    // Accessor untuk menghitung indeks ketahanan pangan
    public function getFoodSecurityIndexAttribute()
    {
        // Contoh formula sederhana, Anda bisa menyesuaikan dengan formula yang sesuai
        $ndviScore = $this->ndvi * 0.2;
        $lstScore = (30 - min($this->lst, 30)) / 30 * 0.15; // Normalisasi LST
        $accessScore = (100 - min($this->jarak_fasilitas_penyedia_pangan * 2, 100)) * 0.25;
        $waterScore = (100 - min($this->jarak_air_bersih * 2, 100)) * 0.2;
        $healthScore = (100 - min($this->jarak_fasilitas_kesehatan * 2, 100)) * 0.1;
        $educationScore = (100 - min($this->jarak_fasilitas_pendidikan * 2, 100)) * 0.1;

        return ($ndviScore + $lstScore + $accessScore + $waterScore + $healthScore + $educationScore) * 100;
    }

    // Accessor untuk menentukan status ketahanan pangan
    public function getFoodSecurityStatusAttribute()
    {
        $index = $this->food_security_index;

        if ($index >= 80) {
            return 'Aman';
        } elseif ($index >= 60) {
            return 'Rentan';
        } else {
            return 'Tidak Aman';
        }
    }
}
