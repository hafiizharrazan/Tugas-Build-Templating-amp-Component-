<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::view('/laporan', 'laporan')->name('laporan');