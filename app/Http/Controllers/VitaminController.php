<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitamin;
use RealRashid\SweetAlert\Facades\Alert;

class VitaminController extends Controller
{
    public function index($nik_anak)
    {
        return view ('entry.vitamin.index', [
            "nik_anak" => $nik_anak
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
            'jenis_vitamin'=>$request->jenis_vitamin,
            'tgl_vitamin'=>$request->tgl_vitamin,
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data Vitamin Berhasil Ditambahkan!');

    }
    

}