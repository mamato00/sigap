<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class PetaAPPWidget extends Widget
{
    /**
     * @var view-string
     */
    protected static string $view = 'filament.widgets.peta-app-widget';

    // Urutan tampilan widget di dashboard
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = '1';

    /**
     * Daftar gambar yang akan ditampilkan.
     * Anda bisa mengganti ini dengan data dari database atau sumber lain.
     * Path gambar relatif terhadap folder 'public'.
     */
    public array $images = [
        'peta/APP1.png',
        'peta/APP2.png',
        'peta/APP3.png',
        'peta/APP4.png',
    ];

    /**
     * Indeks gambar yang sedang aktif.
     * Properti public akan otomatis di-track oleh Livewire.
     */
    public int $currentIndex = 0;

    /**
     * Method untuk pindah ke gambar berikutnya.
     * Dipanggil saat tombol "Next" diklik.
     */
    public function nextImage(): void
    {
        // Jika sudah di gambar terakhir, kembali ke gambar pertama
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    /**
     * Method untuk pindah ke gambar sebelumnya.
     * Dipanggil saat tombol "Previous" diklik.
     */
    public function previousImage(): void
    {
        // Jika sudah di gambar pertama, pindah ke gambar terakhir
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
    }

    /**
     * Helper untuk mendapatkan URL gambar saat ini.
     */
    public function getCurrentImage(): string
    {
        return $this->images[$this->currentIndex] ?? '';
    }

    /**
     * Helper untuk mendapatkan deskripsi gambar saat ini.
     */
    public function getCurrentImageDescription(): string
    {
        return "Gambar " . ($this->currentIndex + 1) . " dari " . count($this->images);
    }
}
