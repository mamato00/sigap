<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PetaInteraktifController;
use App\Http\Controllers\PeringkatPanganController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/{section}', [PageController::class, 'index'])->where('section', 'about|features|services|pricing|contact');

// Route untuk menampilkan halaman galeri
Route::get('/peta-interaktif', [PetaInteraktifController::class, 'index'])->name('peta-interaktif');
Route::get('/data-ketahanan-pangan', [PeringkatPanganController::class, 'index'])->name('peringkat-pangan.index');
Route::get('/download-food-security-data', [PeringkatPanganController::class, 'downloadFoodSecurityData'])->name('download.food-security');
