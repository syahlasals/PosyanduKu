<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;
use App\Models\Anak;
use RealRashid\SweetAlert\Facades\Alert;

class VaksinController extends Controller
{
    public function index($nik_anak)
    {
        $vaksins = Vaksin::where('nik_anak', $nik_anak)->get();
        $nama_anak = Anak::where('nik_anak', $nik_anak)->first();
        $nama = $nama_anak->nama_anak;
        return view('entry.vaksin.index',[
            "nik_anak" => $nik_anak,
            "vaksins" => $vaksins,
            "nama_anak" => $nama
        ]);
    }


        public function store(Request $request)
        {
            $this->validate($request, [
                'jenis_vaksin'=>'required',
                'tgl_vaksin'=>'required',

            ]);

            $carianak = Vaksin::where('nik_anak', $request->nik_anak)->where('jenis_vaksin', $request->jenis_vaksin)->exists();

            if($carianak){
                return back()->with('jenisvaksin', 'Sudah mendapatkan vaksin ini!');
            } else {
    
             Vaksin::create([
                'nik_anak'=>$request->nik_anak,
                'nama_anak'=>$request->nama_anak,
                'jenis_vaksin'=>$request->jenis_vaksin,
                'tgl_vaksin'=>$request->tgl_vaksin,
            ]);
            
            return redirect('/entry/InputImunisasi')->with('success', 'Data Vaksin Berhasil Ditambahkan!');
            }
        }
}

