<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Imunisasi;
use App\Models\Penyimpangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImunisasiController extends Controller
{
    public function index()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.index', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function notvaksin()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.notvaksin', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function notvitamin()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.notvitamin', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function notkondisi()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.notkondisi', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function normal()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.normal', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function giziBuruk()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.giziBuruk', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function stunting()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.stunting', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function obesitas()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.obesitas', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetakSemua()
    {
        $tanggal = date('l, d F y');
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->count();
        $notvitamin = Anak::doesntHave('vitamins')->count();
        $notkondisi = Anak::doesntHave('penyimpangans')->count();    
        return view('pengelola.dataImunisasi.cetak.cetakSemua', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetakNormal()
    {
        $tanggal = date('d F y');
        $anaks = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->count();
        $notvitamin = Anak::doesntHave('vitamins')->count();
        $notkondisi = Anak::doesntHave('penyimpangans')->count();
        return view('pengelola.dataImunisasi.cetak.cetakNormal', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetakGiziBuruk()
    {
        $tanggal = date('d F y');
        $anaks = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->count();
        $notvitamin = Anak::doesntHave('vitamins')->count();
        $notkondisi = Anak::doesntHave('penyimpangans')->count();
        return view('pengelola.dataImunisasi.cetak.cetakGiziBuruk', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetakStunting()
    {
        $tanggal = date('d F y');
        $anaks = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->count();
        $notvitamin = Anak::doesntHave('vitamins')->count();
        $notkondisi = Anak::doesntHave('penyimpangans')->count();
        return view('pengelola.dataImunisasi.cetak.cetakStunting', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetakObesitas()
    {
        $tanggal = date('d F y');
        $anaks = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->count();
        $notvitamin = Anak::doesntHave('vitamins')->count();
        $notkondisi = Anak::doesntHave('penyimpangans')->count();
        return view('pengelola.dataImunisasi.cetak.cetakObesitas', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetaknotvaksin()
    {
        $tanggal = date('d F y');
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();    
        return view('pengelola.dataImunisasi.cetak.cetaknotvaksin', [
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetaknotvitamin()
    {
        $tanggal = date('d F y');
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.cetak.cetaknotvitamin', [
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }

    public function cetaknotkondisi()
    {
        $tanggal = date('d F y');
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        $notvaksin = Anak::doesntHave('vaksins')->get();
        $notvitamin = Anak::doesntHave('vitamins')->get();
        $notkondisi = Anak::doesntHave('penyimpangans')->get();
        return view('pengelola.dataImunisasi.cetak.cetaknotkondisi', [
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal,
            'notvaksin' => $notvaksin,
            'notvitamin' => $notvitamin,
            'notkondisi' => $notkondisi
        ]);
    }



}
