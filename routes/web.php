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

Route::get('/', 'App\Http\Controllers\SiController@indexsi');

//admin route
Route::get('/admin', 'App\Http\Controllers\SiController@admin');
Route::get('/plogin', 'App\Http\Controllers\AuthController@showLoginForm')->name('plogin');
Route::post('/plogin', 'App\Http\Controllers\AuthController@plogin');
Route::get('/pregister', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('pregister');
Route::post('/pregister', 'App\Http\Controllers\AuthController@pregister');

//beranda
Route::get('/indexsi', 'App\Http\Controllers\SiController@indexsi');

//-------------PENELITIAN---------------
// Laboratorium
Route::get('/laboratorium', 'App\Http\Controllers\SiController@laboratorium');
// Laboratorium Komputer
Route::get('/labkomp', 'App\Http\Controllers\SiController@labkomp');
Route::get('/labkompa', 'App\Http\Controllers\SiController@labkompa');
Route::get('/labkompb', 'App\Http\Controllers\SiController@labkompb');
// Laboratorium Jaringan
Route::get('/labjaringan', 'App\Http\Controllers\SiController@labjaringan');
// Laboratorium Enterprise 
Route::get('/labenter', 'App\Http\Controllers\SiController@labenter');
// Laboratorium IOT
Route::get('/labiot', 'App\Http\Controllers\SiController@labiot');

// KKDK
Route::get('/kkdk', 'App\Http\Controllers\SiController@kkdk');

// Riset
Route::get('/riset', 'App\Http\Controllers\SiController@riset');


//-------------KEMAHASISWAAN---------------
// Layanan Mahasiswa
Route::get('/layanan', 'App\Http\Controllers\SiController@layanan');

// Prestasi Mahasiswa
Route::get('/prestasi', 'App\Http\Controllers\SiController@prestasi');
// Prestasi MLBB
Route::get('/prestasimlbb', 'App\Http\Controllers\SiController@prestasimlbb');

// Kehidupan Kampus
Route::get('/kehidupank', 'App\Http\Controllers\SiController@kehidupank');

// Beasiswa
Route::get('/beasiswa', 'App\Http\Controllers\SiController@beasiswa');


//-------------KURIKULUM---------------
// CPL
Route::get('/cpl', 'App\Http\Controllers\SiController@cpl');

// Kurikulum
Route::get('/kurikulum', 'App\Http\Controllers\SiController@kurikulum');

// Profesi
Route::get('/profesi', 'App\Http\Controllers\SiController@profesi');

// Profil Lulusan
Route::get('/profil', 'App\Http\Controllers\SiController@profil');


//-------------TENTANG---------------
// Sambutan Kaprodi
Route::get('/sambutan', 'App\Http\Controllers\SiController@sambutan');

// Prodi SI
Route::get('/prodi', 'App\Http\Controllers\SiController@prodi');

// Staf Pengajar
Route::get('/staf', 'App\Http\Controllers\SiController@staf');

// Manajemen
Route::get('/manajemen', 'App\Http\Controllers\SiController@manajemen');

// Survey
Route::get('/survey', 'App\Http\Controllers\SiController@survey');

// Kontak
Route::get('/kontak', 'App\Http\Controllers\SiController@kontak');


//-------------Admin------------------
Route::get('/tambahprestasi', 'App\Http\Controllers\AdminController@tambahprestasi');

Route::post('/simpanprestasi', 'App\Http\Controllers\AdminController@simpanprestasi');

Route::get('/editprestasi/{id}', 'App\Http\Controllers\AdminController@editprestasi');

Route::post('/updateprestasi', 'App\Http\Controllers\AdminController@updateprestasi');