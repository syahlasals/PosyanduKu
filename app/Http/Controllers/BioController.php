<?php

namespace App\Http\Controllers;

use App\Models\ProfileOrtu;
use Illuminate\Http\Request;

class BioController extends Controller
{
    //
    public function index()
    {
        return view('ortu.biodata.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk'=>'required', 
            'alamat_ortu'=>'required', 
            'rt'=>'required', 
            'rw'=>'required', 
            'nama_ayah'=>'required',
            'pekerjaan_ayah'=>'required', 
            'nik_ayah'=>'required', 
            'nama_ibu'=>'required', 
            'pekerjaan_ibu'=>'required', 
            'nik_ibu'=>'required'
        ]);

        $anaks = ProfileOrtu::create([
            'no_kk'=>$request->no_kk, 
            'alamat_ortu'=>$request->alamat_ortu, 
            'rt'=>$request->rt, 
            'rw'=>$request->rw, 
            'nama_ayah'=>$request->nama_ayah,
            'pekerjaan_ayah'=>$request->pekejaan_ayah, 
            'nik_ayah'=>$request->nik_ayah, 
            'nama_ibu'=>$request->nama_ibu, 
            'pekerjaan_ibu'=>$request->pekerjaan_ibu, 
            'nik_ibu'=>$request->nik_ibu
        ]);

        return redirect('/ortu')->with('success', 'Data berhasil di tambahkan');
    }
}

