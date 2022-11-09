<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;

class VaksinController extends Controller
{
    public function index($nik_anak)
    {
        return view('entry.vaksin.index',[
            "nik_anak" => $nik_anak
        ]);
    }

    public function create()
    {
        return view('entry.vaksin.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kode_vaksin'     => 'required',
            'nik_anak'     => 'required',
            'jenis_vaksin'   => 'required'
        ]);

        //create post
        Vaksin::create([
            'kode_vaksin'     => $request->kode_vaksin,
            'nik_anak'     => $request->nik_anak,
            'jenis_vaksin'   => $request->jenis_vaksin
        ]);

        //redirect to index
        return redirect()->route('entry.vaksin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // public function save(Request $request)
    // {
    //     //dd($request->except(['_token', 'submit']));
    //     //yang tidak masukan kedalam database adalah _token dan submit
    //     Vaksin::create($request->except(['nik_anak', 'submit']));
    //     return redirect('/entry/vaksin');
    // }

}

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'kode_vaksin'=>'required',
    //         'nik_anak'=>'required',
    //         'jenis_vaksin'=>'required'
    //     ]);

    //     $vaksins = Vaksin::create([
    //         'kode_vaksin'=>$request->kode_vaksin,
    //         'nik_anak'=>$request->nik_anak,
    //         'jenis_vaksin'=>$request->jenis_vaksin
    //     ]);

        

    //     return redirect()->route('entry/vaksin/create')->with(['success' => 'Data Berhasil Disimpan!']);
    // }



