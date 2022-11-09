<?php

namespace App\Http\Controllers;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImunisasiController extends Controller
{
    public function index()
    {
        $imunisasis = Imunisasi::all();
        return view('pengelola.dataImunisasi.index', ['imunisasiList' => $imunisasis]);
    }
}