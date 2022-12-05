<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
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

        $anak = Anak::where('nik_anak', $request->nik_anak)->first();
        $ortu = Ortu::where('no_kk', $request->no_kk)->first();
        $lahir = Carbon::createFromFormat('Y-m-d', $request->tgl_anak);
        $date = Carbon::parse($lahir)->diff(Carbon::now())->format('%y,%m,%d');
        $umur = explode(',', $date);
    
        if($ortu == null){
        return back()->with('msg', 'No KK belum terdaftar!');
        }elseif( $anak != null){
            return back()->with('anak', 'Nik Anak Sudah terdaftar!');
        }
        else{


        $anaks = Anak::create([
            'no_kk'=>$request->no_kk,
            'nik_anak'=>$request->nik_anak,
            'nama_anak'=>$request->nama_anak,
            'jenkel_anak'=>$request->jenkel_anak,
            'tgl_anak'=>$request->tgl_anak,
            'tmp_anak'=>$request->tmp_anak,
            'tahun' => $umur[0],
            'bulan' => $umur[1],
            'hari' => $umur[2],
            'golongan_darah'=>$request->golongan_darah
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Berhasil Mendaftar');
    };
    }
}
