<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\pegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('index');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('workshop', function () {
	return view('workshop');
});

Route::get('news', function () {
	return view('news');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('5026241010', function () {
	return view('5026241010');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('makeover', function () {
	return view('makeover');
});

Route::get('dosen', [DosenController::class,'index']);

Route::get('biodata', [DosenController::class,'biodata']);

//crud pertemuan 11
Route::get('/pegawai', [pegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [pegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [pegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [pegawaiDBController::class,'edit']);
Route::post('/pegawai/update', [pegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}', [pegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari', [pegawaiDBController::class,'cari']);

//Pertemuan 7
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
