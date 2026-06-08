<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\pegawaiDBController;
use App\Http\Controllers\BlogController;

// GENERAL
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

// DOSEN
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

// PEGAWAI DB — route spesifik HARUS di atas {nama}
Route::get('/pegawai', [pegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [pegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [pegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [pegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [pegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [pegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [pegawaiDBController::class, 'cari']);

// Route wildcard {nama} HARUS paling bawah agar tidak menimpa route di atas
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// PEGAWAI
Route::get('/pegawai', [pegawaiDBController::class, 'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


// BLOG
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


// PERTEMUAN / LATIHAN
Route::get('/nrp', function () { return view('5026241184'); });
Route::get('/menu', function () { return view('menu'); });
Route::get('/master', function () { return view('master'); });

Route::get('/pertemuan1-intro', function () { return view('pertemuan1-intro'); });
Route::get('/pertemuan2-news', function () { return view('pertemuan2-news'); });
Route::get('/pertemuan3-responsive', function () { return view('pertemuan3-responsive'); });
Route::get('/pertemuan3-nyamnyam', function () { return view('pertemuan3-nyamnyam'); });
Route::get('/pertemuan4-5026241184', function () { return view('pertemuan4-5026241184'); });
Route::get('/pertemuan5-dell', function () { return view('pertemuan5-dell'); });
Route::get('/pertemuan5-simply', function () { return view('pertemuan5-simply'); });

// NILAI KULIAH
use App\Http\Controllers\NilaiKuliahController;

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create']);
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store']);

// KERANJANG BELANJA
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/create', [KeranjangBelanjaController::class, 'create']);
Route::post('/keranjangbelanja', [KeranjangBelanjaController::class, 'store']);
Route::delete('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'destroy']);

