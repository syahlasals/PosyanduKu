<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitamin;

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
            'kode_vitamin'=>'required',
            'nip'=>'required',
            'nik_anak'=>'required',
            'jenis_vitamin'=>'required'
        ]);

        $vitamins = Vitamin::create([
            'kode_vitamin'=>$request->kode_vitamin,
            'nip'=>$request->nip,
            'nik_anak'=>$request->nik_anak,
            'jenis_vitamin'=>$request->jenis_vitamin
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Vitamin berhasil di tambahkan');
    }
    

}