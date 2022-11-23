<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use RealRashid\SweetAlert\Facades\Alert;

class PetugasController extends Controller
{
    public function index()
    {
        $petugass = petugas::all();
        return view('pengelola.dataPetugas.index', compact('petugass'));
    }
    
    public function hapuspetugas(Request $request)
    {
        $petugass = petugas::where('nip', $request->nip)->delete(); 
        return redirect("/pengelola/dataPetugas");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function edit($nip)
    {
        $petugass = DB::table('tb_petugas')->where('nip', $nip)->first();
        return view('/pengelola/dataPetugas.edit', ['ptgs'=> $petugass]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $petugass = petugas::where('nip', $nip)
             ->update([
                'nip'=>$request->nip,
                'nama_petugas'=>$request->nama_petugas,
                'jenkel_petugas'=>$request->jenkel_petugas,
                'jabatan'=>$request->jabatan,
                'alamat_petugas'=>$request->alamat_petugas,
        ]);
        return redirect('/pengelola/dataPetugas')->with('success', 'Data Berhasil Diubah!');
        // return redirect()->route('pengelola.dataPetugas.index')->with('success', 'Data Berhasil Diedit!');
    }

    // public function destroy($id)
    // {
    //     $petugas = petugas::find($id);
    //     $petugas->detele();
    //     return redirect('/pengelola/dataPetugas')->with('success', 'Data Berhasil Dihapus!');
    // }
}
