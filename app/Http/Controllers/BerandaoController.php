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
    public function ortuEdit($no_kk)
    {
        $ortus = DB::table('tb_ortu')->where('no_kk', $no_kk)->first();
        return view('/ortu.edit', ['ortu'=> $ortus]);
    }

    public function indexanak()
    {
        return view('ortu.anak.index');
    }


    public function updateOrtu(Request $request, $no_kk)
    {
        $ortus = ProfileOrtu::where('no_kk', $no_kk)
             ->updateOrtu([
                'no_kk'=>$request->no_kk,
                'alamat_ortu'=>$request->alamat_ortu,
                'rt'=>$request->rt,
                'rw'=>$request->rw,
                'nama_ayah'=>$request->nama_ayah,
                'pekerjaan_ayah'=>$request->pekerjaan_ayah,
                'nik_ayah'=>$request->nik_ayah,
                'nama_ibu'=>$request->nama_ibu,
                'pekerjaan_ibu'=>$request->pekerjaan_ibu,
                'nik_ibu'=>$request->nik_ibu
        ]);
        return redirect('ortu.index')->with('success', 'Data berhasil Di Update');
    }

}
