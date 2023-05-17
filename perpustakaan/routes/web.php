<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanBukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Assalamualaikum, Ukhty';
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/tes-kesehatan', function () {
    return view('tes-kesehatan');
});

Route::get('/form-registrasi-anggota', [RegistrasiAnggotaController::class, 'index']);
Route::post('/hasil_regist', [RegistrasiAnggotaController::class, 'hasil']);

Route::get('/form-peminjaman-buku', [PeminjamanBukuController::class, 'index']);
Route::post('/hasil_peminjaman', [PeminjamanBukuController::class, 'hasil']);