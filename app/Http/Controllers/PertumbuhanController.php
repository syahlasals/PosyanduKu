<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PertumbuhanStatus;
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
        $nama_anak = Anak::where('nik_anak', $nik_anak)->first();
        $nama = $nama_anak->nama_anak;
        return view ('entry.pertumbuhan.index', [
            "nik_anak" => $nik_anak,
            "nama_anak" => $nama
        ]);
    }

    public function store(Request $request)
    {

        $umur = Anak::where('nik_anak', $request->nik_anak)->first();
        $tahun = $umur->tahun;
        $bulan = $umur->bulan;

        
        // if($tahun != 0){
        //     $result = 2*$tahun + 8;
        //     if($request->berat == $result){
        //         $berat = '1';
        //     }else{
        //         $berat = '0';
        //     }
        // }else{
        //     $result = $bulan/2 + 4;
        //     if($request->berat == $result){
        //         $berat = '1';
        //     }else{
        //         $berat = '0';
        //     }
        // }

        // IF ELSE BERAT
        if($bulan == 0){
            $result = 3;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 1){
                $result = 4;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 2){
            $result = 5;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 3){
                $result = 6;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 4){
            $result = 6;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 5){
                $result = 7;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 6){
            $result = 8;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 7){
                $result = 8;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 8){
            $result = 9;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 9){
                $result = 9;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 10){
            $result = 9;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 11){
                $result = 10;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 0){
            $result = 10;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 1){
                $result = 10;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 2){
            $result = 10;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 3){
                $result = 10;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 4){
            $result = 11;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 5){
                $result = 11;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 6){
            $result = 11;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 7){
                $result = 11;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 8){
            $result = 11;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 9){
                $result = 12;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 1 && $bulan == 10){
            $result = 12;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 11){
                $result = 12;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($tahun == 2 && $bulan == 0 ){
            $result = 12;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }
        
        
        
        
        
        
        // IF ELSE TINGGI
        else{
            if($bulan == 0){
                $result = 49;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 1){
            $result =  55;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 2){
                $result = 57;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 3){
            $result = 60;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 4){
                $result = 62;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 5){
            $result = 64;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 6){
                $result = 66;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 7){
            $result = 67;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 8){
                $result = 69;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 9){
            $result = 70;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 10){
                $result = 71;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 11){
            $result = 73;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 0){
                $result = 74;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 1){
            $result = 75;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 2){
                $result = 76;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 3){
            $result = 77;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 4){
                $result = 79;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 5){
            $result = 80;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 6){
                $result = 81;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 7){
            $result = 82;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 8){
                $result = 83;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 9){
            $result = 84;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 10){
                $result = 85;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1 && $bulan == 11){
            $result = 86;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 2 && $bulan == 0 ){
                $result = 86;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }
        
        
        
        
        
        
        
        // IF ELSE LINGKAR KEPALA
        if($bulan == 0){
            $result = 34;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 1){
                $result = 36;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 2){
            $result = 38;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 3){
                $result = 40;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 4){
            $result = 40;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 5){
                $result = 41;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 6){
            $result = 42;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 7){
                $result = 43;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 8){
            $result = 43;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 9){
                $result = 44;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 10){
            $result = 44;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 11){
                $result = 44;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 0){
            $result = 45;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 1){
                $result = 45;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 2){
            $result = 45;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 3){
                $result = 45;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 4){
            $result = 46;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 5){
                $result = 46;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 6){
            $result = 46;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 7){
                $result = 46;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 8){
            $result = 47;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 9){
                $result = 47;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 1 && $bulan == 10){
            $result = 47;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1 && $bulan == 11){
                $result = 47;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 2 && $bulan == 0 ){
            $result = 47;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
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
            'kode_pertumbuhan' =>  $pertumbuhans->kode_pertumbuhan,
            'nik_anak'=>$request->nik_anak,
            'bb'=> $berat,
            'tb'=>$tinggi,
            'lk'=>$lingkar_kepala,
            'kpsp'=>$request->kpsp,
            'tdd'=>$request->tdd,
            'tdl'=>$request->tdl,
            'kmpe'=>$request->kmpe,
            'mchat'=>$request->mchat,
            'gpph'=>$request->gpph,
            'tgl_hitung'=>$request->tgl_hitung,
        ]);
        
        return redirect('/entry/InputImunisasi')->with('success', 'Data Pertumbuhan Berhasil Ditambahkan!');
    }

    public function indexs($nik_anak)
    {
        $tumbuhs = PertumbuhanStatus::where('nik_anak', $nik_anak)->get();
        $nama_anak = Anak::where('nik_anak', $nik_anak)->first();
        $nama = $nama_anak->nama_anak;
        $kode_pertumbuhan = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        $tgl_hitung = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        return view ('entry.statusPenyimpangan.index', [
            "nik_anak" => $nik_anak,
            "kode_pertumbuhan" =>  $kode_pertumbuhan,
            "tumbuhs" => $tumbuhs,
            "tgl_hitung" =>  $tgl_hitung,
            "nama_anak" => $nama
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
