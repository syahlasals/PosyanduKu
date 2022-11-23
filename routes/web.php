<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\BerandaeController;
use App\Http\Controllers\BerandaoController;
use App\Http\Controllers\BerandapController;
use App\Http\Controllers\StuntingController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\DaftarAnakController;
use App\Http\Controllers\PertumbuhanController;


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

Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', function () {
        return view('auth/login');
    });
    
    Route::prefix('pengelola')->middleware('pengelola')->group(function () {
        Route::get('/',[BerandapController::class,'index'])->name('pengelola');
        Route::resource('/dataAnak', AnakController::class);
        Route::get('/delete/dataAnak/{id}', [AnakController::class,'destroy']);
        Route::get('dataPosyandu',[ProfileController::class,'index']);
        Route::resource('dataPetugas', PetugasController::class);
        Route::get('hapuspetugas/dataPetugas', [PetugasController::class,'hapuspetugas'])->name('hapuspetugas');
        Route::get('dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
        Route::post('dataPetugas/update/{nip}',[PetugasController::class,'update']);
        Route::get('dataStunting', [StuntingController::class, 'tampilDataStunting'])->name('tampilDataStunting');
        Route::get('dataStunting', [StuntingController::class, 'hitungAnak']);
        Route::resource('dataImunisasi', ImunisasiController::class);
        Route::get('dataImunisasi', [ImunisasiController::class, 'index']);
        Route::resource('pengelola/sdidtkAnak', StuntingController::class);
    });
    
    Route::get('pengelola', [StuntingController::class, 'charts'])->name('charts');

    
    // Route::prefix('entry')->middleware('entry')->group(function () {
        Route::get('/entry',[BerandaeController::class,'index'])->name('entry')->middleware('entry');
        Route::resource('entry/pendaftaranAnak', DaftarAnakController::class)->middleware('entry');
        Route::get('entry/InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi')->middleware('entry');
        Route::get('entry/history', [AnakController::class, 'historyImunisasi'])->middleware('entry');
        Route::resource('entry/sdidtkAnak', StuntingController::class)->middleware('entry');
    // });

        Route::get('entry/vaksin/{nik_anak}', [VaksinController::class, 'index'])->middleware('entry');
        Route::post('store/vaksin', [VaksinController::class, 'store'])->middleware('entry');
        Route::get('entry/vitamin/{nik_anak}', [VitaminController::class, 'index'])->middleware('entry'); 
        Route::post('store/vitamin', [VitaminController::class, 'store'])->middleware('entry');
        Route::get('entry/pertumbuhan/{nik_anak}', [PertumbuhanController::class, 'index'])->middleware('entry');
        Route::post('store/pertumbuhan', [PertumbuhanController::class, 'store'])->middleware('entry');
        Route::get('entry/formSdidtk/{nik_anak}', [StuntingController::class, 'tampilFormSdidtk'])->middleware('entry');
        Route::post('store/formSdidtk', [StuntingController::class, 'store'])->middleware('entry');
    
    
    // Route::prefix('ortu')->middleware('ortu')->group(function () {
        Route::resource('ortu', BerandaoController::class)->middleware('ortu');
        Route::get('/redirects', [HomeController::class, 'index'])->middleware('ortu');
    });
// });


