<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Stunting;
use App\Models\Pertumbuhan;
use App\Models\Penyimpangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PertumbuhanController extends Controller
{
    public function index($nik_anak)
    {
        return view ('entry.pertumbuhan.index', [
            "nik_anak" => $nik_anak
        ]);
    }

    public function store(Request $request)
    {
        
        $umur = Anak::where('nik_anak', $request->nik_anak)->first();
        $tahun = $umur->tahun;
        $bulan = $umur->bulan;

        // if($bulan == 0){
        //     $result = 3;
        //     if($request->berat == $result){
        //         $berat = 1;
        //     }else{
        //         $berat = 0;
        //     }
        // }else{
        //     if($bulan == 1){
        //         $result = 4;
        //         if($request->berat == $result){
        //             $berat = 1;
        //         }else{
        //             $berat = 0;
        //         }
        //     }
        // }

        if($tahun != 0){
            $result = 2*$tahun + 8;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            $result = $bulan/2 + 4;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }

        $this->validate($request, [
            'nik_anak' =>'required',
            'tinggi'=>'required',
            'berat'=>'required',
            'lingkar_kepala'=>'required',
            'tgl_hitung'=>'required'
        ]);
        
        $pertumbuhans = Pertumbuhan::create([
            'nik_anak'=>$request->nik_anak,
            'tinggi'=>$request->tinggi,
            'berat'=>$request->berat,
            'lingkar_kepala'=>$request->lingkar_kepala,
            'tgl_hitung'=>$request->tgl_hitung
        ]);
        
        $sdidtks = Stunting::create([
            'nik_anak'=>$request->nik_anak,
            'bb_tb'=>$berat,
            'tb_u'=>null,
            'kpsp'=>null,
            'tdd'=>null,
            'tdl'=>null,
            'kmpe'=>null,
            'mchat'=>null,
            'gpph'=>null,
            'tgl_hitung'=>'2022-12-02',
        ]);
        return redirect('/entry/InputImunisasi')->with('success', 'Data Pertumbuhan Berhasil Ditambahkan!');
    }

    public function indexs($nik_anak)
    {
        $kode_pertumbuhan = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        $tgl_hitung = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        return view ('entry.statusPenyimpangan.index', [
            "nik_anak" => $nik_anak,
            "kode_pertumbuhan" =>  $kode_pertumbuhan,
            "tgl_hitung" =>  $tgl_hitung,
          ]);
    }

    public function stores(Request $request)
    {
        $this->validate($request, [
            'nik_anak' =>'required',
            'status_penyimpangan' => 'required',
            'tgl_hitung'=>'required'
        ]);

        $penyimpangans = Penyimpangan::create([
            'nik_anak'=>$request->nik_anak,
            'status_penyimpangan'=>$request->status_penyimpangan,
            'tgl_hitung'=>$request->tgl_hitung
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data Penyimpangan Berhasil Ditambahkan!');
    }
}
