<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TataUsahaController;
use App\Http\Controllers\PendaftaranController;


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

route::get('/login',[LoginController::class,'halaman_login']);

Route::get('/tata_usaha/dashboard', [TataUsahaController::class,'dashboard_tu']);
Route::get('/tata_usaha/profil', [TataUsahaController::class,'profil']);
Route::get('/tata_usaha/data_pendaftar', [TataUsahaController::class,'pendaftar']);
Route::get('/tata_usaha/detail_data', [TataUsahaController::class,'detail']);
Route::get('/tata_usaha/ubah_password', [TataUsahaController::class,'ubahpw']);
Route::get('/detail_data/edit_keterangan_siswa', [TataUsahaController::class,'edit_ket_siswa']);
Route::get('/detail_data/edit_keterangan_ortu', [TataUsahaController::class,'edit_ket_ortu']);
Route::get('/detail_data/edit_keterangan_wali', [TataUsahaController::class,'edit_ket_wali']);

Route::get('/hal_pendaftaran/keterangan_siswa', [PendaftaranController::class,'ket_siswa']);
Route::get('/hal_pendaftaran/keterangan_ortu', [PendaftaranController::class,'ket_ortu']);
Route::get('/hal_pendaftaran/keterangan_wali', [PendaftaranController::class,'ket_wali']);

Route::get('/admin/dashboard', [AdminController::class,'index']);
Route::get('/admin/profil', [AdminController::class,'profil']);
Route::get('/admin/data_user', [AdminController::class,'data_user']);
Route::get('/admin/edit_data_user', [AdminController::class,'edit_user']);
Route::get('/admin/tambah_user', [AdminController::class,'tambah_user']);
Route::get('/admin/ubah_password', [AdminController::class,'ubah_psw']);

// Route::get('/admin/edit_home', [AdminController::class,'editHome']);
// Route::get('/admin/edit_fasilitas', 'AdminController@editFasilitas');
// Route::get('/admin/edit_profil', 'AdminController@editProfil');
// Route::get('/admin/edit_lulusPTN', 'AdminController@editLulusPTN');
// Route::get('/admin/ubah_password', 'AdminController@ubahpwadmn');

// Route::get('/halaman_utama/profil', 'HalamanUtamaController@profil');
// Route::get('/halaman_utama/fasilitas', 'HalamanUtamaController@fasilitas');
// Route::get('/halaman_utama/lulusan', 'HalamanUtamaController@lulusan');

// route::post('/postlogin',[LoginController::class,'post_login'])->name('postlogin');
// route::get('/logout',[LoginController::class,'logout'])->name('logout');

// // route::middleware('admin')->group(function ()
//     route::group(['middleware' => ['auth', 'ceklevel:admin,tata_usaha']], function () {
//     route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin');
// });




