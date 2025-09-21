<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RawatInapController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Konsultasi
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');

// Rawat Inap
Route::get('/rawat-inap', [HomeController::class, 'rawatInap'])->name('rawat-inap');

// Dokter 
Route::get('/dokter', function () {
    return view('dokter'); // resources/views/dokter.blade.php
})->name('dokter');

// Layanan 
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

// Apotek
Route::get('/apotek', function () {
    return view('apotek');
})->name('apotek');

//Rawatinap
Route::get('/rawat-inap', [RawatInapController::class, 'index'])->name('rawat-inap');
Route::get('/rawat-inap/lihat/{id}', [RawatInapController::class, 'lihatPasien'])->name('rawat-inap.lihat');
Route::get('/rawat-inap/daftar', [RawatInapController::class, 'create'])->name('rawat-inap.daftar');
Route::post('/rawat-inap/daftar', [RawatInapController::class, 'store'])->name('rawat-inap.store');