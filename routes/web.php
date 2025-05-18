<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PasienController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::resource('kelurahan', KelurahanController::class);
Route::resource('unit-kerja', UnitKerjaController::class);
Route::resource('paramedik', ParamedikController::class);
Route::resource('periksa', PeriksaController::class);
Route::resource('pasien', PasienController::class);