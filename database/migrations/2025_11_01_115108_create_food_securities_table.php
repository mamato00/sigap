<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('food_securities', function (Blueprint $table) {
            $table->id();
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('kabkot');
            $table->decimal('bui', 20, 10)->nullable();
            $table->decimal('ndbi', 20, 10)->nullable();
            $table->decimal('ntl', 20, 10)->nullable();
            $table->decimal('rwi', 8, 3)->nullable();
            $table->decimal('hutan', 20, 4)->nullable();
            $table->decimal('sawah', 20, 4)->nullable();
            $table->decimal('evi', 20, 10)->nullable();
            $table->decimal('lst', 20, 2)->nullable();
            $table->decimal('ndmi', 20, 10)->nullable();
            $table->decimal('ndvi', 20, 10)->nullable();
            $table->decimal('savi', 20, 10)->nullable();
            $table->decimal('jarak_air_bersih', 20, 2)->nullable();
            $table->decimal('jarak_fasilitas_kesehatan', 20, 2)->nullable();
            $table->decimal('jarak_fasilitas_pendidikan', 20, 2)->nullable();
            $table->decimal('jarak_fasilitas_penyedia_pangan', 20, 2)->nullable();
            $table->integer('density_fpendidikan')->nullable();
            $table->integer('density_sosek')->nullable();
            $table->integer('density_fkesehatan')->nullable();
            $table->decimal('latitude', 11, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food_securities');
    }
};
