<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;

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

//Praktikum 10
Route::get('/dashboard', [DashboardController::class, 'index']);
//Route::get('/buku', [BukuController::class, 'index']);

//Praktikum 11
Route::get('/dashboard/book', [BookController::class, 'index']);
Route::get('/dashboard/member', [MemberController::class, 'index']);

//Praktikum 12
Route::get('/dashboard/book/create', [BookController::class, 'create']);
Route::post('/dashboard/book/store', [BookController::class, 'store']);
Route::delete('/dashboard/book/destroy/{id}', [BookController::class, 'destroy']);

Route::get('/dashboard/member/create', [MemberController::class, 'create']);
Route::post('/dashboard/member/store', [MemberController::class, 'store']);
Route::delete('/dashboard/member/destroy/{id}', [MemberController::class, 'destroy']);

//Praktikum 13 - Edit & Detail
Route::get('/dashboard/book/edit/{id}', [BookController::class, 'edit']);
Route::put('/dashboard/book/update/{id}', [BookController::class, 'update']);
Route::get('/dashboard/book/show/{id}', [BookController::class, 'show']);