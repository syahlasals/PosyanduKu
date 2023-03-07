<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Vitamin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class VitaminController extends Controller
{
    public function index($nik_anak)
    {
        $vitamins= Vitamin::where('nik_anak', $nik_anak)->get();
        $nama_anak = Anak::where('nik_anak', $nik_anak)->first();
        $nama = $nama_anak->nama_anak;
        return view ('entry.vitamin.index', [
            'nik_anak' => $nik_anak,
            'vitamins' => $vitamins,
            'nama_anak' => $nama
          ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_vitamin'=>'required',
            'tgl_vitamin'=>'required',
        ]);


        $tglvtmn = Vitamin::where('nik_anak', $request->nik_anak)->where('tgl_vitamin', $request->tgl_vitamin)->exists();
        $tgltoday = Vitamin::where('nik_anak', $request->nik_anak)->where('tgl_vitamin', date('Y-m-d'))->exists();
        if($tglvtmn || $tgltoday){
            return back()->with('tglvitamin', 'Anda tidak bisa mendaparkan vitamin dalam satu waktu!');
        } else {
            Vitamin::create([
                'nik_anak'=>$request->nik_anak,
                'nama_anak'=>$request->nama_anak,
                'jenis_vitamin'=>$request->jenis_vitamin,
                'tgl_vitamin'=>$request->tgl_vitamin,
            ]);

            return redirect('/entry/InputImunisasi')->with('success', 'Data Vitamin Berhasil Ditambahkan!');
        }
    }
}
?>
