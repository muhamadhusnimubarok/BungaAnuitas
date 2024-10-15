<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleInterestController;
use App\Http\Controllers\CompoundInterestController;
use App\Http\Controllers\AnnuityController;
use App\Http\Controllers\ComparisonController;

Route::get('/', function () {
    return view('home');
});

// Route untuk menghitung bunga tunggal
Route::post('/simple-interest', [SimpleInterestController::class, 'calculate']);

// Route untuk menghitung bunga majemuk (modal akhir dan awal) 
Route::post('/compound-interest', [CompoundInterestController::class, 'calculate']);

// Route untuk menampilkan tabel amortisasi anuitas
Route::post('/annuity-table/generate', [AnnuityController::class, 'generateAmortizationTable']);
Route::post('/annuity-table/generate-summary', [AnnuityController::class, 'generateTable']);

// Route untuk form bunga tunggal
Route::get('/simple-interest-form', function () {
    return view('bungatunggal.bunga_tunggal');
});

// Route untuk form bunga majemuk
Route::get('/compound-interest-form', function () {
    return view('bungamajemuk.bunga_majemuk');
});

// Route untuk form anuitas
Route::get('/annuity-form', function () {
    return view('anuitas.annuity');
});

// Route untuk form perbandingan bunga
Route::get('/comparison-form', function () {
    return view('perbandingan.perbandingan-hasil');
});

// Route untuk membandingkan bunga
Route::post('/compare-interest', [ComparisonController::class, 'compare']);
