<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImunisasiController extends Controller
{
    public function index()
    {
        $anaks = Anak::all();
        return view('pengelola.dataImunisasi.index', ['anakList' => $anaks]);
        
    }
}