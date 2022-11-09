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

Route::get('/', function () {
    return view('auth/login');
});

Route::prefix('pengelola')->middleware('pengelola')->group(function () {
    Route::get('/',[BerandapController::class,'index'])->name('pengelola');
    Route::resource('dataAnak', AnakController::class);
    Route::get('pengelola/dataPosyandu',[ProfileController::class,'index']);
    Route::resource('dataPetugas', PetugasController::class);
    Route::get('hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas');
    Route::get('dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
    Route::post('dataPetugas/update/{nip}',[PetugasController::class,'update']);
    Route::get('dataStunting', [StuntingController::class, 'tampilDataStunting'])->name('tampilDataStunting');
    Route::resource('dataImunisasi', ImunisasiController::class);
});

Route::get('/entry',[BerandaeController::class,'index'])->name('entry')->middleware('entry');
Route::get('entry/vaksin/{nik_anak}', [VaksinController::class, 'index'])->middleware('entry');
Route::post('/entry/vaksin/create', [VaksinController::class, 'create'])->middleware('entry');
Route::post('/entry/vaksin/store', [VaksinController::class, 'store'])->middleware('entry');
Route::get('entry/vitamin/{nik_anak}', [VitaminController::class, 'index'])->middleware('entry');
Route::get('entry/pertumbuhan/{nik_anak}', [PertumbuhanController::class, 'index'])->middleware('entry');   
Route::post('store/vaksin', [VaksinController::class, 'store'])->middleware('entry');
Route::get('entry/vitamin/{nik_anak}', [VitaminController::class, 'index'])->middleware('entry');
Route::post('store/vitamin', [VitaminController::class, 'store'])->middleware('entry');
Route::get('entry/pertumbuhan/{nik_anak}', [PertumbuhanController::class, 'index'])->middleware('entry');
Route::post('store/pertumbuhan', [PertumbuhanController::class, 'store'])->middleware('entry');
// Route::resource('entry/vaksin', VaksinController::class)->middleware('entry');
// Route::resource('entry/vitamin', VitaminController::class)->middleware('entry');
// Route::resource('entry/pertumbuhan', PertumbuhanController::class)->middleware('entry');
Route::resource('entry/pendaftaranAnak', DaftarAnakController::class)->middleware('entry');
Route::get('entry/InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi')->middleware('entry');
Route::get('entry/history', [AnakController::class, 'historyImunisasi'])->middleware('entry');
Route::get('entry/pertumbuhan', [AnakController::class, 'pertumbuhan'])->middleware('entry');
Route::resource('entry/sdidtkAnak', StuntingController::class)->middleware('entry');
Route::resource('entry/formSdidtk', StuntingController::class)->middleware('entry');
Route::get('entry/formSdidtk', [StuntingController::class, 'tampilFormSdidtk'])->name('tampilFormSdidtk')->middleware('entry');

// Route::prefix('entry')->middleware('entry')->group(function () {
//     Route::get('/',[BerandaeController::class,'index'])->name('entry');
//     Route::resource('vaksin', VaksinController::class);
//     Route::resource('vitamin', VitaminController::class);
//     Route::resource('pertumbuhan', PertumbuhanController::class);
//     Route::resource('pendaftaranAnak', DaftarAnakController::class);
//     Route::get('InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi');
//     Route::get('history', [AnakController::class, 'historyImunisasi']);
//     Route::get('pertumbuhan', [AnakController::class, 'pertumbuhan']);
//     Route::resource('sdidtkAnak', StuntingController::class);
//     Route::resource('formSdidtk', StuntingController::class);
//     Route::get('formSdidtk', [StuntingController::class, 'tampilFormSdidtk'])->name('tampilFormSdidtk');
// });

// Route::prefix('entry')->middleware('entry')->group(function () {
//     Route::get('/',[BerandaeController::class,'index'])->name('entry');
//     Route::resource('vaksin', VaksinController::class);
//     Route::resource('vitamin', VitaminController::class);
//     Route::resource('pertumbuhan', PertumbuhanController::class);
//     Route::resource('pendaftaranAnak', DaftarAnakController::class);
//     Route::get('InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi');
//     Route::get('history', [AnakController::class, 'historyImunisasi']);
//     Route::get('pertumbuhan', [AnakController::class, 'pertumbuhan']);
//     Route::resource('sdidtkAnak', StuntingController::class);
//     Route::resource('formSdidtk', StuntingController::class);
//     Route::get('formSdidtk', [StuntingController::class, 'tampilFormSdidtk'])->name('tampilFormSdidtk');
// });

Route::get('/pengelola/dataImunisasi', [ImunisasiController::class, 'index']);


Route::resource('pengelola/sdidtkAnak', StuntingController::class)->middleware('pengelola');
Route::prefix('ortu')->middleware('ortu')->group(function () {
    Route::resource('ortu', BerandaoController::class);
});

Route::get('/redirects', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('pengelola/dataAnak', AnakController::class)->middleware('pengelola');
// Route::get('pengelola/dataPosyandu',[ProfileController::class,'index'])->middleware('pengelola');
// Route::get('/pengelola',[BerandapController::class,'index'])->name('pengelola')->middleware('pengelola');
// Route::resource('pengelola/dataPetugas', PetugasController::class)->middleware('pengelola');
// Route::get('/pengelola/hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas')->middleware('pengelola');
// Route::get('/pengelola/dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit')->middleware('pengelola');
// Route::post('/pengeloladataPetugas/update/{nip}',[PetugasController::class,'update'])->middleware('pengelola');
// Route::get('pengelola/dataStunting', [StuntingController::class, 'tampilDataStunting'])->name('tampilDataStunting')->middleware('pengelola');
// Route::resource('pengelola/dataImunisasi', ImunisasiController::class)->middleware('pengelola');

// Route::get('/',[BerandaeController::class,'index'])->name('entry')->middleware('entry');
// Route::resource('entry/vaksin', VaksinController::class)->middleware('entry');
// Route::resource('entry/vitamin', VitaminController::class)->middleware('entry');
// Route::resource('entry/pertumbuhan', PertumbuhanController::class)->middleware('entry');
// Route::resource('entry/pendaftaranAnak', DaftarAnakController::class)->middleware('entry');
// Route::get('entry/InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi')->middleware('entry');
// Route::get('entry/history', [AnakController::class, 'historyImunisasi'])->middleware('entry');
// Route::get('entry/pertumbuhan', [AnakController::class, 'pertumbuhan'])->middleware('entry');
// Route::resource('entry/sdidtkAnak', StuntingController::class)->middleware('entry');
// Route::resource('entry/formSdidtk', StuntingController::class)->middleware('entry');
// Route::get('entry/formSdidtk', [StuntingController::class, 'tampilFormSdidtk'])->name('tampilFormSdidtk')->middleware('entry');