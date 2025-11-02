<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankingPcaGt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kabkot',
        'sfsi',
        'ikp',
        'rank_pca',
        'rank_gt',
        'selisih_rank',
        'selisih_abs',
    ];
}
