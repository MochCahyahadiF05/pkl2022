<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halaman-2', function () {
    return ('halaman 2');
});
//router parameter
Route::get('halaman-2/{nama}/jenis-kelamin/{jk}', function ($nama, $jk) {
    return ('halaman profil ' . $nama . ' dengan jenis kelamin ' . $jk);
});
Route::get('halaman-2/profil/{nama?}', function ($nama = 'kosong') {
    return ('halaman profil ' . $nama);
});

Route::get('halaman-3', function () {
    return ('halaman 3');
});

// Route::get('profile', function () {
//     return view('profile');
// });

// Route::get('about/{nama}', function ($nama) {
//     return view('about', compact('nama'));
// });

Route::get('pesa/{menu?}', function ($a = '-') {
    return view('pages.pesa', compact('a'));
});

Route::get('pesan/{makanan?}/{minuman?}/{porsi?}', function ($makanan = 'silahkan isi pesanan', $minuman = null, $porsi = null) {
    return view('pages.pesan', compact('makanan', 'minuman', 'porsi'));
});

Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('about/{nama}-{perkalian}', 'LatihanController@facebook');
Route::get('siswa/{id?}{murid?}-{age?}', 'LatihanController@siswa');
Route::get('BMI/{beratbadan?}-{tinggi?}-{umur}', 'LatihanController@badan');
Route::get('dosen', 'LatihanController@dosen');
Route::get('kampus', 'LatihanController@mhs');
Route::get('sekola', 'LatihanController@sekola');
Route::get('belanjaan', 'LatihanController@belanjaan');

// route post
Route::get('post', 'PostController@tampil');
Route::get('post/{id}', 'PostController@search');
Route::get('post/judul/{title}', 'PostController@search_title');
Route::get('post/edit/{id}/{title}/{content}', 'PostController@edit');
Route::get('post/tambah/{title}/{content}', 'PostController@tambah');
Route::get('post/delete/{id}', 'PostController@hapus');
