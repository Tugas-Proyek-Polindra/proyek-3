<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\NilaiPelajaranController;
use App\Http\Controllers\NilaiSikapController;
use App\Http\Controllers\RiwayatKeaktifanController;
use App\Http\Controllers\RekapNilaiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ExcelCSVController;

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
    return view('landingpage');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Route::get('/santri', [SantriController::class, 'index'])->name('santri');
// Route::get('/pelajaran', [PelajaranController::class, 'index']);

Route::group(['middleware' => 'staff'], function () {
    Route::resource('/santri', SantriController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/guru', GuruController::class);
    Route::resource('/keaktifan', RiwayatKeaktifanController::class)->except(['show', 'destroy', 'create']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/rekap-nilai', RekapNilaiController::class);
    Route::resource('/pelajaran', PelajaranController::class);
    Route::resource('/nilai-pelajaran', NilaiPelajaranController::class);
    Route::resource('/nilai-sikap', NilaiSikapController::class);
    Route::resource('/absensi', AbsensiController::class)->except('show');
});






