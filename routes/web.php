<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\NilaiPelajaranController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route::get('/santri', [SantriController::class, 'index'])->name('santri');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/santri', SantriController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/pelajaran', PelajaranController::class);
    Route::resource('/guru', GuruController::class);
    Route::resource('/nilai/pelajaran', NilaiPelajaranController::class);
});





Auth::routes();

