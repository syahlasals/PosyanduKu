<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;

class VaksinController extends Controller
{
    public function index()
    {
        return view('entry.vaksin.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_vaksin'=>'required',
            'nip'=>'required',
            'nik_anak'=>'required',
            'jenis_vaksin'=>'required'
        ]);

        $vaksins = Vaksin::create([
            'kode_vaksin'=>$request->kode_vaksin,
            'nip'=>$request->nip,
            'nik_anak'=>$request->nik_anak,
            'jenis_vaksin'=>$request->jenis_vaksin
        ]);

        return redirect('/entry/vaksin')->with('success', 'Vaksin berhasil di tambahkan');
    }

}