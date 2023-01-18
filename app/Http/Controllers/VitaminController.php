<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitamin;
use App\Models\Anak;
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


        $vitamins = Vitamin::create([
            'nik_anak'=>$request->nik_anak,
            'nama_anak'=>$request->nama_anak,
            'jenis_vitamin'=>$request->jenis_vitamin,
            'tgl_vitamin'=>$request->tgl_vitamin,
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data Vitamin Berhasil Ditambahkan!');

    }
    

}