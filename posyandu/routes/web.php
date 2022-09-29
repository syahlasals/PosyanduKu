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

Route::resource('dataAnak', AnakController::class);

Route::get('/dataPosyandu',[ProfileController::class,'index']);

Route::get('/berandaPengelola',[BerandapController::class,'index']);

Route::get('/berandaEntry',[BerandaeController::class,'index']);

Route::resource('dataPetugas', PetugasController::class);
Route::get('/hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas');
Route::get('/dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
Route::post('/dataPetugas/update/{nip}',[PetugasController::class,'update']);

Route::resource('vaksin', VaksinController::class);

Route::resource('vitamin', VitaminController::class);

Route::resource('pendaftaranAnak', DaftarAnakController::class);
