<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ortu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarAnakController extends Controller
{
    public function index()
    {
        return view('entry.pendaftaranAnak.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk'=>'required',
            'nik_anak'=>'required',
            'nama_anak'=>'required',
            'jenkel_anak'=>'required|in:L,P',
            'tgl_anak'=>'required',
            'tmp_anak'=>'required',
            'golongan_darah'=>'required',
        ]);

        $ortu = Ortu::where('no_kk', $request->no_kk)->first();

        if($ortu == null){
        return back()->with('msg','No Kartu Keluarga belum terdaftar!');
        }else{


        $anaks = Anak::create([
            'no_kk'=>$request->no_kk,
            'nik_anak'=>$request->nik_anak,
            'nama_anak'=>$request->nama_anak,
            'jenkel_anak'=>$request->jenkel_anak,
            'tgl_anak'=>$request->tgl_anak,
            'tmp_anak'=>$request->tmp_anak,
            'golongan_darah'=>$request->golongan_darah
        ]);

        return redirect('/entry/pendaftaranAnak')->with('success', 'Berhasil Mendaftar');
    };
    }
}
