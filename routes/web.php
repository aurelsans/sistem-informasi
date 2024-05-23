<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [SiController::class, 'indexsi'])->name('indexsi');
Route::get('/indexsi', [SiController::class, 'indexsi'])->name('indexsi');
Route::get('/laboratorium', [SiController::class, 'laboratorium'])->name('laboratorium');
Route::get('/labkomp', [SiController::class, 'labkomp'])->name('labkomp');
Route::get('/kkdk', [SiController::class, 'kkdk'])->name('kkdk');
Route::get('/riset', [SiController::class, 'riset'])->name('riset');
Route::get('/layanan', [SiController::class, 'layanan'])->name('layanan');
Route::get('/prestasi', [SiController::class, 'prestasi'])->name('prestasi');
Route::get('/prestasimlbb', [SiController::class, 'prestasimlbb'])->name('prestasimlbb');
Route::get('/kehidupank', [SiController::class, 'kehidupank'])->name('kehidupank');
Route::get('/beasiswa', [SiController::class, 'beasiswa'])->name('beasiswa');
Route::get('/cpl', [SiController::class, 'cpl'])->name('cpl');
Route::get('/kurikulum', [SiController::class, 'kurikulum'])->name('kurikulum');
Route::get('/profesi', [SiController::class, 'profesi'])->name('profesi');
Route::get('/profil', [SiController::class, 'profil'])->name('profil');
Route::get('/sambutan', [SiController::class, 'sambutan'])->name('sambutan');
Route::get('/prodi', [SiController::class, 'prodi'])->name('prodi');
Route::get('/staf', [SiController::class, 'staf'])->name('staf');
Route::get('/manajemen', [SiController::class, 'manajemen'])->name('manajemen');
Route::get('/survey', [SiController::class, 'survey'])->name('survey');
Route::get('/kontak', [SiController::class, 'kontak'])->name('kontak');
Route::get('/search', [SiController::class, 'search'])->name('search');


// Rute untuk menampilkan laboratorium_a
Route::get('labkompa', [SiController::class, 'showLaboratoriumA'])->name('labkompa');

// Rute untuk menampilkan laboratorium_b
Route::get('labkompb', [SiController::class, 'showLaboratoriumB'])->name('labkompb');

// Rute untuk menampilkan laboratorium_c
Route::get('labjaringan', [SiController::class, 'showLaboratoriumC'])->name('labjaringan');

// Rute untuk menampilkan laboratorium_d
Route::get('labenter', [SiController::class, 'showLaboratoriumD'])->name('labenter');

// Rute untuk menampilkan laboratorium_e
Route::get('labiot', [SiController::class, 'showLaboratoriumE'])->name('labiot');

/*
  _____ 
 |  ___|
 | |__  
 |  __| 
 | |___ 
 \____/ 

 KHUSUS ADMIN
*/

//----------------login-------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('hidden.login.access');
Route::post('/login', [AuthController::class, 'login'])->middleware('hidden.login.access');
Route::post('/set-hidden-login-access', function (Illuminate\Http\Request $request) {
  $request->session()->put('hidden_login_access', true);
  return response()->json(['status' => 'success']);
})->name('set.hidden.login.access');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//--------------Route Khusus Admin---------------------------
Route::middleware(['admin', 'auth'])->group(function () {
Route::get('/admin', 'App\Http\Controllers\SiController@admin');
Route::get('/prestasiadmin', 'App\Http\Controllers\SiController@prestasiadmin');
Route::get('/cpladmin', 'App\Http\Controllers\SiController@cpladmin');
Route::get('/profesiadmin', 'App\Http\Controllers\SiController@profesiadmin');
Route::get('/spekadmin', 'App\Http\Controllers\SiController@spekadmin');
Route::get('/fasilitasadmin', 'App\Http\Controllers\SiController@fasilitasadmin');
Route::get('/routeradmin', 'App\Http\Controllers\SiController@routeradmin');

Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout'); // Hanya untuk tujuan demonstrasi

//-------------Prestasi------------------
Route::get('/tambahprestasi', 'App\Http\Controllers\AdminController@tambahprestasi');

Route::post('/simpanprestasi', 'App\Http\Controllers\AdminController@simpanprestasi');

Route::get('/editprestasi/{id}', 'App\Http\Controllers\AdminController@editprestasi');

Route::post('/updateprestasi', 'App\Http\Controllers\AdminController@updateprestasi');

//--------------CPL------------------

Route::get('/tambahcapaian', 'App\Http\Controllers\AdminController@tambahcapaian');

Route::post('/simpancapaian', 'App\Http\Controllers\AdminController@simpancapaian');

Route::get('/tambahdeskripsi', 'App\Http\Controllers\AdminController@tambahdeskripsi');

Route::post('/simpandeskripsi', 'App\Http\Controllers\AdminController@simpandeskripsi');

Route::get('/hapuscapaian/{id}', 'App\Http\Controllers\AdminController@hapuscapaian');

Route::get('/editdeskripsi/{id}', 'App\Http\Controllers\AdminController@editdeskripsi');

Route::post('/updatedeskripsi', 'App\Http\Controllers\AdminController@updatedeskripsi');

Route::get('/deletedeskripsi/{id}', 'App\Http\Controllers\AdminController@deletedeskripsi');

//-------------Profesi----------------

Route::get('/tambahprofesi', 'App\Http\Controllers\AdminController@tambahprofesi');

Route::post('/simpanprofesi', 'App\Http\Controllers\AdminController@simpanprofesi');

Route::get('/editprofesi/{id}', 'App\Http\Controllers\AdminController@editprofesi');

Route::post('/updateprofesi', 'App\Http\Controllers\AdminController@updateprofesi');

Route::get('/hapusprofesi/{id}', 'App\Http\Controllers\AdminController@hapusprofesi');

//-------------Laboratorium-------------

Route::get('/tambahlaboratorium', 'App\Http\Controllers\AdminController@tambahlaboratorium');

Route::post('/simpanlaboratorium', 'App\Http\Controllers\AdminController@simpanlaboratorium');

//-------------Spesifikasi--------------

Route::get('/tambahspesifikasi', 'App\Http\Controllers\AdminController@tambahspesifikasi');

Route::post('/simpanspesifikasi', 'App\Http\Controllers\AdminController@simpanspesifikasi');

Route::get('/editspesifikasi/{id}', 'App\Http\Controllers\AdminController@editspesifikasi');

Route::post('/updatespesifikasi', 'App\Http\Controllers\AdminController@updatespesifikasi');

Route::get('/hapusspesifikasi/{id}', 'App\Http\Controllers\AdminController@hapusspesifikasi');

//-------------Fasilitas--------------

Route::get('/tambahfasilitas', 'App\Http\Controllers\AdminController@tambahfasilitas');

Route::post('/simpanfasilitas', 'App\Http\Controllers\AdminController@simpanfasilitas');

Route::get('/editfasilitas/{id}', 'App\Http\Controllers\AdminController@editfasilitas');

Route::post('/updatefasilitas', 'App\Http\Controllers\AdminController@updatefasilitas');

Route::get('/hapusfasilitas/{id}', 'App\Http\Controllers\AdminController@hapusfasilitas');

//--------------Router----------------

Route::get('/tambahrouter', 'App\Http\Controllers\AdminController@tambahrouter');

Route::post('/simpanrouter', 'App\Http\Controllers\AdminController@simpanrouter');

Route::get('/tambahdetail', 'App\Http\Controllers\AdminController@tambahdetail');

Route::post('/simpandetail', 'App\Http\Controllers\AdminController@simpandetail');

Route::get('/hapusrouter/{id}', 'App\Http\Controllers\AdminController@hapusrouter');

Route::get('/editdetail/{id}', 'App\Http\Controllers\AdminController@editdetail');

Route::post('/updatedetail', 'App\Http\Controllers\AdminController@updatedetail');

Route::get('/deletedetail/{id}', 'App\Http\Controllers\AdminController@deletedetail');

// ------------- ADMIN ------------ 
Route::get('/prestasiadmin', 'App\Http\Controllers\SiController@prestasiadmin');
});