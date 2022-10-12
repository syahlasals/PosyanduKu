<?php

namespace App\Http\Controllers;

use App\Models\Pertumbuhan;
use Illuminate\Http\Request;

class PertumbuhanController extends Controller
{
    public function index()
    {
        return view('entry.pertumbuhan.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_pertumbuhan'=>'required',
            'tinggi'=>'required',
            'berat'=>'required',
            'lingkar_kepala'=>'required'
        ]);

        $pertumbuhans = Pertumbuhan::create([
            'kode_pertumbuhan'=>$request->kode_pertumbuhan,
            'tinggi'=>$request->tinggi,
            'berat'=>$request->berat,
            'lingkar_kepala'=>$request->lingkar_kepala
        ]);

        return redirect('/entry/pertumbuhan')->with('success', 'Data Pertumbuhan berhasil di tambahkan');
    }
}
