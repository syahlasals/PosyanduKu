<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Penyimpangan;
use App\Models\Pertumbuhan;
use App\Models\Vaksin;
use App\Models\Vitamin;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function historyImunisasi($nik_anak)
    {
        $anaks = Anak::all();
        $vaksins= Vaksin::where('nik_anak', $nik_anak)->get();
        $vitamins= Vitamin::where('nik_anak', $nik_anak)->get();
        $pertumbuhans= Pertumbuhan::where('nik_anak', $nik_anak)->get();
        $penyimpangans= Penyimpangan::where('nik_anak', $nik_anak)->get();
        $anak = Anak::where('nik_anak', $nik_anak)->first();
        return view('entry.historyImunisasi.index', compact('vaksins','anak', 'vitamins', 'pertumbuhans', 'penyimpangans'));
    }
}
