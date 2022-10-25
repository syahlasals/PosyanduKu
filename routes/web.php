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
Route::get('auth/register',[HomeController::class,'linkregister']);

Route::resource('pengelola/dataAnak', AnakController::class)->middleware('pengelola');

Route::get('pengelola/dataPosyandu',[ProfileController::class,'index'])->middleware('pengelola');

Route::get('/pengelola',[BerandapController::class,'index'])->name('pengelola')->middleware('pengelola');

Route::get('/entry',[BerandaeController::class,'index'])->name('entry')->middleware('entry');

Route::resource('ortu', BerandaoController::class)->middleware('ortu');

Route::resource('pengelola/dataPetugas', PetugasController::class)->middleware('pengelola');
Route::get('/pengelola/hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas')->middleware('pengelola');
Route::get('/pengelola/dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit')->middleware('pengelola');
Route::post('/pengelola/dataPetugas/update/{nip}',[PetugasController::class,'update'])->middleware('pengelola');

Route::resource('entry/vaksin', VaksinController::class)->middleware('entry');

Route::resource('entry/vitamin', VitaminController::class)->middleware('entry');
// Route::resource('entry/vitamin', VitaminController::class);
Route::get('entry/vitamin{nik_anak}', [VitaminController::class, 'index']);

Route::resource('entry/pertumbuhan', PertumbuhanController::class)->middleware('entry');

Route::resource('entry/pendaftaranAnak', DaftarAnakController::class)->middleware('entry');

Route::get('entry/inputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi')->middleware('entry');
Route::get('entry/history', [AnakController::class, 'historyImunisasi'])->middleware('entry');
Route::get('entry/pertumbuhan', [AnakController::class, 'pertumbuhan'])->middleware('entry');

Route::resource('pengelola/dataImunisasi', ImunisasiController::class)->middleware('pengelola');

Route::get('/redirects', [HomeController::class, 'index']);
// Route::get('/redirects', [HomeController::class, 'logout']);


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
Route::resource('entry/sdidtkAnak', StuntingController::class)->middleware('entry');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
