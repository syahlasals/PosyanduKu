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
            $result = 7;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($bulan == 5){
                $result = 8;
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
                $result = 9;
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
            $result =10;
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
        }if($tahun == 1){
            $result = 10;
            if($request->berat == $result){
                $berat = 1;
            }else{
                $berat = '0';
            }
        }else{
            if($tahun == 2){
                $result = 12;
                if($request->berat == $result){
                    $berat = 1;
                }else{
                    $berat = '0';
                }
            }
        }if($bulan == 0){
            $result = 46;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 1){
                $result = 50;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 2){
            $result = 54;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 3){
                $result = 56;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 4){
            $result = 58;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 5){
                $result = 60;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 6){
            $result = 62;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 7){
                $result = 63;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 8){
            $result = 65;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 9){
                $result = 67;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 10){
            $result = 68;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($bulan == 11){
                $result = 69;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($tahun == 1){
            $result = 71;
            if($request->tinggi == $result){
                $tinggi = 1;
            }else{
                $tinggi = '0';
            }
        }else{
            if($tahun == 2){
                $result = 85;
                if($request->tinggi == $result){
                    $tinggi = 1;
                }else{
                    $tinggi = '0';
                }
            }
        }if($bulan == 0){
            $result = 32;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 1){
                $result = 37;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 2){
            $result = 39;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 3){
                $result = 41;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 4){
            $result = 42;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 5){
                $result = 43;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 6){
            $result = 44;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 7){
                $result = 45;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 8){
            $result = 45;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 9){
                $result = 46;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 10){
            $result = 46;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($bulan == 11){
                $result = 46;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($bulan == 12){
            $result = 47;
            if($request->lingkar_kepala == $result){
                $lingkar_kepala = 1;
            }else{
                $lingkar_kepala = '0';
            }
        }else{
            if($tahun == 1){
                $result = 48;
                if($request->lingkar_kepala == $result){
                    $lingkar_kepala = 1;
                }else{
                    $lingkar_kepala = '0';
                }
            }
        }if($tahun == 2){
            $result = 48;
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
        $nama_anak = Anak::where('nik_anak', $nik_anak)->first();
        $nama = $nama_anak->nama_anak;
        $kode_pertumbuhan = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        $tgl_hitung = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        return view ('entry.statusPenyimpangan.index', [
            "nik_anak" => $nik_anak,
            "kode_pertumbuhan" =>  $kode_pertumbuhan,
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
