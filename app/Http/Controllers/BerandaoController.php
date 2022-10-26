<?php

namespace App\Http\Controllers;

use App\Models\ProfileOrtu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaoController extends Controller
{
    public function index()
    {
        $ortus = ProfileOrtu::all();
        return view('ortu.index', compact('ortus'));  
    }

    // public function show()
    // {
    //     $ortus = ProfileOrtu::all();
    //     return view('ortu.index', compact('ortus'));  
    // }

    public function indexanak()
    {
        return view('ortu.anak.index');
    }
}