<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ranking_pca_gts', function (Blueprint $table) {
            $table->id();
            $table->string('kabkot'); // Nama Kabupaten/Kota
            $table->decimal('sfsi', 15, 10); // Angka desimal dengan presisi tinggi
            $table->decimal('ikp', 15, 10);  // Angka desimal dengan presisi tinggi
            $table->integer('rank_pca');
            $table->integer('rank_gt');
            $table->integer('selisih_rank');
            $table->integer('selisih_abs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranking_pca_gts');
    }
};
