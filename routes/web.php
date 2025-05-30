<?php

use Illuminate\Support\Facades\Route; //ini import
use App\Http\Controllers\Link; //ini import
use App\Http\Controllers\PegawaiController; //ini importjuga
use App\Http\Controllers\BlogController; //ini importjuga
use App\Http\Controllers\Pegawai2Controller; //ini importjuga

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('blog', [Link::class, 'helloword']);

Route::get('satu', function () {
	return view('pertama');
});

Route::get('dua', function () {
	return view('viewport');
});

Route::get('tiga', function () {
	return view('tugas4');
});

Route::get('empat', function () {
	return view('template1');
});

Route::get('lima', function () {
	return view('js1');
});

Route::get('enam', function () {
	return view('js2');
});

Route::get('tujuh', function () {
	return view('linktree');
});

Route::get('delapan', function () {
	return view('index');
});

Route::get('tugas', function () {
	return view('tampilanblog');
});

Route::get('dosen', [Link::class, 'index']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);


//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update', [PegawaiController::class,'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);
