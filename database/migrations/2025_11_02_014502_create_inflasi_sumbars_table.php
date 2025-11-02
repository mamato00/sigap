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
        Schema::create('inflasi_sumbars', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun'); // Tahun
            $table->string('bulan'); // Bulan (Januari, Februari, dst.)
            $table->decimal('kabupaten_dharmasraya', 8, 2)->nullable(); // Nullable untuk nilai kosong
            $table->decimal('kabupaten_pasaman_barat', 8, 2)->nullable();
            $table->decimal('kota_padang', 8, 2)->nullable();
            $table->decimal('kota_bukittinggi', 8, 2)->nullable();
            $table->decimal('provinsi', 8, 2)->nullable();
            $table->timestamps();

            // Tambahkan index untuk mencegah duplikasi data per tahun dan bulan
            $table->unique(['tahun', 'bulan']);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inflasi_sumbars');
    }
};
