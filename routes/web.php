<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AuthController;

// Halaman landing
Route::get('/', function () {
    return view('welcome');
});

// Autentikasi
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// 🔒 Hanya bisa diakses kalau sudah login
Route::middleware('auth')->group(function () {
    Route::resource('beranda', HomeController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('unit-kerja', UnitKerjaController::class);
    Route::resource('paramedik', ParamedikController::class);
    Route::resource('periksa', PeriksaController::class);
    Route::resource('pasien', PasienController::class);
});
