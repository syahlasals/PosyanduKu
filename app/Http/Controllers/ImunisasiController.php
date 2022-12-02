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
        $normal = Penyimpangan::where('status_penyimpangan','Normal')->count();
        $gejalastunting = Penyimpangan::where('status_penyimpangan','Gejala Stunting')->count();
        $stunting = Penyimpangan::where('status_penyimpangan','Stunting')->count();
        return view('pengelola.dataImunisasi.index', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'gejalastunting' => $gejalastunting,
            'stunting' => $stunting,
        ]);
        
    }

    public function print()
    {
        $tanggal = date('d F y');
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Penyimpangan::where('status_penyimpangan','Normal')->count();
        $gejalastunting = Penyimpangan::where('status_penyimpangan','Gejala Stunting')->count();
        $stunting = Penyimpangan::where('status_penyimpangan','Stunting')->count();
        return view('pengelola.dataImunisasi.print', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'gejalastunting' => $gejalastunting,
            'stunting' => $stunting,
            'tanggal' => $tanggal
        ]);
    }
}