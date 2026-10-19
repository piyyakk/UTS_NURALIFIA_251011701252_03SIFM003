<?php

use App\Http\Controllers\CampGearController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CampGearController::class, 'index'])->name('home');
Route::get('/alat/{id}', [CampGearController::class, 'show'])->name('gears.show');
Route::view('/cara-sewa', 'pages.cara-sewa')->name('how');
Route::view('/peraturan', 'pages.peraturan')->name('rules');
