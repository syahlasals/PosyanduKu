<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\HistoryController;
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
use App\Http\Controllers\LogActivitiesController;


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
        Route::get('dataAnak/sdidtkAnak/{id}', [StuntingController::class, 'index'])->middleware('pengelola');
        Route::get('dataAnak/sdidtkAnak/{id}/print', [StuntingController::class, 'print'])->middleware('pengelola');
        Route::resource('dataPosyandu', ProfileController::class);
        Route::get('dataPosyandu/edit/{id_posyandu}',[ProfileController::class,'edit'])->name('edit');
        Route::post('dataPosyandu/update/{id_posyandu}',[ProfileController::class,'update']);
        Route::resource('dataPetugas', PetugasController::class);
        Route::get('hapuspetugas/dataPetugas', [PetugasController::class,'hapuspetugas'])->name('hapuspetugas');
        Route::get('dataPetugas/edit/{nip}',[PetugasController::class,'edit'])->name('edit');
        Route::post('dataPetugas/update/{nip}',[PetugasController::class,'update']);
        Route::get('/dataImunisasi/history/{id}', [HistoryController::class, 'historyImunisasi'])->middleware('pengelola');
        Route::get('dataImunisasi/history/{id}/print', [HistoryController::class, 'print'])->middleware('pengelola');
        Route::get('dataImunisasi', [ImunisasiController::class, 'index']);
        Route::get('dataImunisasi/notvaksin', [ImunisasiController::class, 'notvaksin']);
        Route::get('dataImunisasi/notvitamin', [ImunisasiController::class, 'notvitamin']);
        Route::get('dataImunisasi/notkondisi', [ImunisasiController::class, 'notkondisi']);
        Route::get('dataImunisasi/normal', [ImunisasiController::class, 'normal']);
        Route::get('dataImunisasi/giziBuruk', [ImunisasiController::class, 'giziBuruk']);
        Route::get('dataImunisasi/stunting', [ImunisasiController::class, 'stunting']);
        Route::get('dataImunisasi/obesitas', [ImunisasiController::class, 'obesitas']);
        Route::get('dataImunisasi/print', [ImunisasiController::class, 'cetakSemua']);
        Route::get('dataImunisasi/notvaksin/print', [ImunisasiController::class, 'cetaknotvaksin']);
        Route::get('dataImunisasi/notvitamin/print', [ImunisasiController::class, 'cetaknotvitamin']);
        Route::get('dataImunisasi/notkondisi/print', [ImunisasiController::class, 'cetaknotkondisi']);
        Route::get('dataImunisasi/normal/print', [ImunisasiController::class, 'cetakNormal']);
        Route::get('dataImunisasi/giziBuruk/print', [ImunisasiController::class, 'cetakGiziBuruk']);
        Route::get('dataImunisasi/stunting/print', [ImunisasiController::class, 'cetakStunting']);
        Route::get('dataImunisasi/obesitas/print', [ImunisasiController::class, 'cetakObesitas']);
        Route::resource('sdidtkAnak', StuntingController::class);
        Route::get('/', [StuntingController::class, 'charts'])->name('charts');
        Route::get('logActivity', [LogActivitiesController::class, 'indexpengelola']);
    });

    
    // Route::prefix('entry')->middleware('entry')->group(function () {
        Route::get('/entry',[BerandaeController::class,'index'])->name('entry')->middleware('entry');
        Route::resource('entry/pendaftaranAnak', DaftarAnakController::class)->middleware('entry');
        Route::get('entry/InputImunisasi', [AnakController::class, 'indexInputImunisasi'])->name('index-imunisasi')->middleware('entry');
        // Route::get('entry/history/{id}', [HistoryController::class, 'historyImunisasi'])->middleware('entry');
        // Route::get('entry/sdidtkAnak/{id}', [StuntingController::class, 'index'])->middleware('entry');
        Route::get('entry/daftarOrtu', [BerandaoController::class, 'index2'])->middleware('entry');
        Route::post('store2/daftarOrtu', [BerandaoController::class, 'store2'])->middleware('entry');
    // });

        Route::get('entry/vaksin/{nik_anak}', [VaksinController::class, 'index'])->middleware('entry');
        Route::post('store/vaksin', [VaksinController::class, 'store'])->middleware('entry');
        Route::get('entry/vitamin/{nik_anak}', [VitaminController::class, 'index'])->middleware('entry'); 
        Route::post('store/vitamin', [VitaminController::class, 'store'])->middleware('entry');
        Route::get('entry/pertumbuhan/{nik_anak}', [PertumbuhanController::class, 'index'])->middleware('entry');
        Route::post('store/pertumbuhan', [PertumbuhanController::class, 'store'])->middleware('entry');
        Route::get('entry/formSdidtk/{nik_anak}', [StuntingController::class, 'tampilFormSdidtk'])->middleware('entry');
        Route::post('store/formSdidtk', [StuntingController::class, 'store'])->middleware('entry');
        Route::get('entry/statusPenyimpangan/{nik_anak}', [PertumbuhanController::class, 'indexs'])->middleware('entry');
        Route::post('stores/statusPenyimpangan', [PertumbuhanController::class, 'stores'])->middleware('entry');
        Route::get('entry/logActivity', [LogActivitiesController::class, 'indexentry']);
    
    // Route::prefix('ortu')->middleware('ortu')->group(function () {
        Route::get('ortu', [BerandaoController::class, 'index'])->middleware('ortu');
        Route::post('ortu', [BerandaoController::class, 'store'])->middleware('ortu');
        // Route::resource('ortu', BerandaoController::class)->middleware('ortu');
        Route::get('/redirects', [HomeController::class, 'index'])->middleware('ortu');
    });
// });