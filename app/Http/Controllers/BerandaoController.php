<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaoController extends Controller
{
    public function index()
    {
        $ortus = Ortu::all();
        return view('ortu.index', compact('ortus'));  
    }

    // public function show()
    // {
    //     $ortus = ProfileOrtu::all();
    //     return view('ortu.index', compact('ortus'));  
    // }

    public function create()
    {
        return view('ortu.anak.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk'=>'required',
            'nik_ayah'=>'required',
            'nik_ibu'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'pekerjaan_ayah'=>'required',
            'pekerjaan_ibu'=>'required',
            'alamat_ortu'=>'required',
            'rt'=>'required',
            'rw'=>'required'
        ]);

        $ortus = Ortu::create([
            'no_kk'=>$request->kode_vaksin,
            'nik_ayah'=>$request->nip,
            'nik_ibu'=>$request->nik_anak,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu,
            'alamat_ortu'=>$request->alamat_ortu,
            'rt'=>$request->rt,
            'rw'=>$request->rw
        ]);

        return redirect('/ortu')->with('success', 'Data berhasil di tambahkan');
    }
}