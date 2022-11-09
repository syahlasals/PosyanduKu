<?php

namespace App\Http\Controllers;
use App\Models\Stunting;
use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StuntingController extends Controller
{
    public function index()
    {
        $sdidtks = Stunting::all();
        return view('entry.sdidtkAnak.index', compact('sdidtks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampilFormSdidtk()
    {
        $sdidtks = Stunting::all();
        return view('entry.formSdidtk.index', compact('sdidtks'));
    }

    public function tampilDataStunting()
    {
        $sdidtks = Stunting::all();
        return view('pengelola.dataStunting.index', compact('sdidtks'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_pertumbuhan'=>'required',
            'nik_anak'=>'required',
            'bb_tb'=>'required|in:1,0',
            'tb_u'=>'required|in:1,0',
            'kpsp'=>'required|in:1,0',
            'tdd'=>'required|in:1,0',
            'tdl'=>'required|in:1,0',
            'kmpe'=>'required|in:1,0',
            'mchat'=>'required|in:1,0',
            'gpph'=>'required|in:1,0'
        ]);

        $sdidtks = Stunting::create([
            'kode_pertumbuhan'=>$request->kode_pertumbuhan,
            'nik_anak'=>$request->nik_anak,
            'bb_tb'=>$request->bb_tb,
            'tb_u'=>$request->tb_u,
            'kpsp'=>$request->kpsp,
            'tdd'=>$request->tdd,
            'tdl'=>$request->tdl,
            'kmpe'=>$request->kmpe,
            'mchat'=>$request->mchat,
            'gpph'=>$request->gpph
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
