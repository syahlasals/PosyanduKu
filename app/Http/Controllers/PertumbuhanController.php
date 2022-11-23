<?php

namespace App\Http\Controllers;

use App\Models\Penyimpangan;
use App\Models\Pertumbuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PertumbuhanController extends Controller
{
    public function index($nik_anak)
    {
        $kode_pertumbuhan = Penyimpangan::where('nik_anak', $nik_anak)->first();
        return view ('entry.pertumbuhan.index', [
            "nik_anak" => $nik_anak,
            "kode_pertumbuhan" =>  $kode_pertumbuhan
          ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_pertumbuhan'=>'required',
            'nik_anak' =>'required',
            'tinggi'=>'required',
            'berat'=>'required',
            'lingkar_kepala'=>'required'
        ]);

        $pertumbuhans = Pertumbuhan::create([
            'kode_pertumbuhan'=>$request->kode_pertumbuhan,
            'nik_anak'=>$request->nik_anak,
            'tinggi'=>$request->tinggi,
            'berat'=>$request->berat,
            'lingkar_kepala'=>$request->lingkar_kepala
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data Pertumbuhan Berhasil Ditambahkan!');
    }

    public function indexs($nik_anak)
    {
        return view ('entry.statusPenyimpangan.index', [
            "nik_anak" => $nik_anak
          ]);
    }

    public function stores(Request $request)
    {
        $this->validate($request, [
            'kode_pertumbuhan'=>'required',
            'nik_anak' =>'required',
            'status_penyimpangan' => 'required',
            
        ]);

        $penyimpangans = Penyimpangan::create([
            'kode_pertumbuhan'=>$request->kode_pertumbuhan,
            'nik_anak'=>$request->nik_anak,
            'status_penyimpangan'=>$request->status_penyimpangan
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data Penyimpangan Berhasil Ditambahkan!');
    }
}
