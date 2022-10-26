<?php

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

Route::resource('pengelola/dataAnak', AnakController::class);

Route::get('pengelola/dataPosyandu',[ProfileController::class,'index']);

Route::get('/pengelola',[BerandapController::class,'index']);

Route::get('/entry',[BerandaeController::class,'index']);

Route::resource('/ortu', BerandaoController::class);

Route::resource('pengelola/dataPetugas', PetugasController::class);
Route::get('/pengelola/hapuspetugas', [PetugasController::class, 'hapuspetugas'])->name('hapuspetugas');
Route::get('/pengelola/dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
Route::post('/pengelola/dataPetugas/update/{nip}',[PetugasController::class,'update']);

Route::resource('entry/vaksin', VaksinController::class);

Route::resource('entry/vitamin', VitaminController::class);

Route::resource('entry/pertumbuhan', PertumbuhanController::class);

Route::resource('entry/pendaftaranAnak', DaftarAnakController::class);

Route::get('entry/inputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi');
Route::get('entry/history', [AnakController::class, 'historyImunisasi']);
Route::get('entry/pertumbuhan', [AnakController::class, 'pertumbuhan']);

Route::resource('pengelola/dataImunisasi', ImunisasiController::class);

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
Route::resource('entry/sdidtkAnak', StuntingController::class);

