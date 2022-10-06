<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anaks = Anak::all();
        return view('pengelola.dataAnak.index', compact('anaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengelola.dataAnak.create');
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
            'no_kk'=>'required',
            'nik_anak'=>'required',
            'nama_anak'=>'required',
            'jenkel_anak'=>'required|in:L,P',
            'tgl_anak'=>'required',
            'tmp_anak'=>'required',
            'golongan_darah'=>'required',
        ]);

        return redirect('/pengelola/dataAnak')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_anak)
    {
        $anak = Anak::find($nik_anak);
            return view('pengelola.dataAnak.show',[
                "anak" => $anak
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik_anak)
    {
        $anaks = Anak::find($nik_anak);
        return view('pengelola.dataAnak.edit', ['anak' => $anaks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik_anak)
    {
        // $this->validate($request, [
        //     'nik_anak' => 'required|max:16',
        //     'no_kk' => 'required|max:16',
        //     'nama' => 'required',
        // ]);
        $anaks = Anak::find($nik_anak);
        $anaks->update($request->all());
        return redirect('/pengelola/dataAnak')->with('success', 'Data berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_anak)
    {    
        // return redirect('/admin/users');

        $anak = Anak::findOrFail($nik_anak);
        $anak->delete();
        return redirect('/pengelola/dataAnak')->with('success', 'data berhasil dihapus');
    }
}
