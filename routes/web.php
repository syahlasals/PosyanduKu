<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\BerandaeController;
use App\Http\Controllers\BerandapController;
use App\Http\Controllers\DaftarAnakController;
use App\Http\Controllers\ImunisasiController;

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

Route::resource('pengelola/dataAnak', AnakController::class);

Route::get('pengelola/dataPosyandu',[ProfileController::class,'index']);

Route::get('/pengelola',[BerandapController::class,'index']);

Route::get('/entry',[BerandaeController::class,'index']);

Route::resource('pengelola/dataPetugas', PetugasController::class);
Route::get('/pengelola/hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas');
Route::get('/pengelola/dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
Route::post('/pengelola/dataPetugas/update/{nip}',[PetugasController::class,'update']);

Route::resource('entry/vaksin', VaksinController::class);

Route::resource('entry/vitamin', VitaminController::class);

Route::resource('entry/pendaftaranAnak', DaftarAnakController::class);

Route::resource('pengelola/dataImunisasi', ImunisasiController::class);