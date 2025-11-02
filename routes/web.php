<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/{section}', [PageController::class, 'index'])->where('section', 'about|features|services|pricing|contact');
