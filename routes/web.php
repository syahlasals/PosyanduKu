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
use App\Http\Controllers\Auth\OutController;
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
    Route::post('/logout', [OutController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('auth/login');
    });
    
    Route::prefix('pengelola')->middleware('pengelola')->group(function () {
        Route::get('/',[BerandapController::class,'index'])->name('pengelola');
        Route::resource('dataAnak', AnakController::class);
        Route::get('dataPosyandu',[ProfileController::class,'index']);
        Route::resource('dataPetugas', PetugasController::class);
        Route::get('hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas');
        Route::get('dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
        Route::post('dataPetugas/update/{nip}',[PetugasController::class,'update']);
        Route::get('dataStunting', [StuntingController::class, 'tampilDataStunting'])->name('tampilDataStunting');
        Route::resource('dataImunisasi', ImunisasiController::class);
        Route::get('dataImunisasi', [ImunisasiController::class, 'index']);
        Route::resource('pengelola/sdidtkAnak', StuntingController::class);
    });
    
    
    Route::prefix('entry')->middleware('entry')->group(function () {
        Route::get('/',[BerandaeController::class,'index'])->name('entry');
        Route::resource('pendaftaranAnak', DaftarAnakController::class);
        Route::get('InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi');
        Route::get('history', [AnakController::class, 'historyImunisasi']);
        Route::resource('sdidtkAnak', StuntingController::class);
    });

        Route::get('entry/vaksin/{nik_anak}', [VaksinController::class, 'index'])->middleware('entry');
        Route::post('store/vaksin', [VaksinController::class, 'store'])->middleware('entry');
        Route::get('entry/vitamin/{nik_anak}', [VitaminController::class, 'index'])->middleware('entry'); 
        Route::post('store/vitamin', [VitaminController::class, 'store'])->middleware('entry');
        Route::get('entry/pertumbuhan/{nik_anak}', [PertumbuhanController::class, 'index'])->middleware('entry');
        Route::post('store/pertumbuhan', [PertumbuhanController::class, 'store'])->middleware('entry');
        Route::get('entry/formSdidtk/{nik_anak}', [StuntingController::class, 'tampilFormSdidtk'])->middleware('entry');
        Route::post('store/formSdidtk', [StuntingController::class, 'store'])->middleware('entry');
    
    
    Route::prefix('ortu')->middleware('ortu')->group(function () {
        Route::resource('ortu', BerandaoController::class);
        Route::get('/redirects', [HomeController::class, 'index']);
    });
});


