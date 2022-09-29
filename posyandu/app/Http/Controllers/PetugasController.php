<?php

namespace App\Http\Controllers;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetugasController extends Controller
{
    public function index()
    {
        $petugass = petugas::all();
        return view('dataPetugas.index', compact('petugass'));
    }
    
    public function hapuspetugas(Request $request){
      
       
        $petugass = petugas::where('nip', $request->nip)->delete();    

        return redirect("/dataPetugas")->with('success', 'Data Petugas Berhasil Di Hapus');
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
        return view('dataPetugas.edit', ['ptgs'=> $petugass]);

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
        
        return redirect()->route('dataPetugas.index')->with('success', 'Data Berhasil Diedit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nip
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(petugas $petugas)
    {
        $petugas->delete();
        return redirect()->route('dataPetugas.index')
        ->with('success', 'sipp');
    }
}
