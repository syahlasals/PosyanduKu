<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Anak;
use App\Models\Ortu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class DaftarAnakController extends Controller
{
    public function index()
    {
        return view('entry.pendaftaranAnak.index');
    }

    public function goldaro()
    {
        $anakgoldaro = DB::select("SELECT * FROM goldar_o");
        return view('pengelola.dataAnak.goldaro', compact('anakgoldaro'));
    }

    public function goldara()
    {
        $anakgoldara = DB::select("SELECT * FROM goldar_a");
        return view('pengelola.dataAnak.goldara', compact('anakgoldara'));
    }

    public function goldarab()
    {
        $anakgoldarab = DB::select("SELECT * FROM goldar_ab");
        return view('pengelola.dataAnak.goldarab', compact('anakgoldarab'));
    }

    public function goldarb()
    {
        $anakgoldarb = DB::select("SELECT * FROM goldar_b");
        return view('pengelola.dataAnak.goldarb', compact('anakgoldarb'));
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
        $nikanak = Str::length($request->nik_anak);

        if($ortu == null){
        return back()-> with('msg', 'No KK belum terdaftar!');
        // }elseif( $anak != null){
        //     return back()->with('anak', 'NIK Anak sudah terdaftar!');
        }elseif($umur[0] > 2){
            return back()->with('tahun', 'Maaf usia anak lebih dari 2 tahun!');
        }elseif($nikanak > 16){
            return back()->with('nikanak', 'NIK Anak tidak sesuai ketentuan!');
        }elseif($nikanak < 16) {
            return back()->with('nikanak', 'NIK Anak tidak sesuai ketentuan!');
        }else{
        
        try {
            Anak::create([
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
        } catch (\Throwable $th) {
            return redirect('/entry/pendaftaranAnak')->with('errors', 'NIK Anak sudah terdaftar!');
        }


        return redirect('/entry/InputImunisasi')->with('success', 'Berhasil Mendaftar');
    };
}
}
