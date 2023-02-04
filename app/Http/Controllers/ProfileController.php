<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('pengelola.dataPosyandu.index', ['profilesList'=>$profiles]);
    }

    public function edit($id_posyandu)
    {
        $profiles = DB::table('tb_posyandu')->where('id_posyandu', $id_posyandu)->first();
        return view('/pengelola/dataPosyandu.edit', ['prfl'=> $profiles]);

    }

    public function update(Request $request, $id_posyandu)
    {
        $profiles = profile::where('id_posyandu', $id_posyandu)
             ->update([
                'id_posyandu'=>$request->id_posyandu,
                'nama_posyandu'=>$request->nama_posyandu,
                'alamat_posyandu'=>$request->alamat_posyandu,
                'nama_rt'=>$request->nama_rt,
                'nama_rw'=>$request->nama_rw,
                'ketua'=>$request->ketua,
                'sekretaris'=>$request->sekretaris,
                'bendahara'=>$request->bendahara,
             ]);
             return redirect('/pengelola/dataPosyandu')->with('success', 'Data Berhasil Diubah!');
    }



    // public function update(Request $request, $id_posyandu)
    // {
    //     $profiles = Profile::where('id_posyandu', $id_posyandu)
    //          ->update([
    //             'id_posyandu'=>$request->id_posyandu,
    //             'nama_posyandu'=>$request->nama_posyandu,
    //             'alamat_posyandu'=>$request->alamat_posyandu,
    //             'nama_rt'=>$request->nama_rt,
    //             'nama_rw'=>$request->nama_rw,
    //             'ketua'=>$request->ketua,
    //             'sekretaris'=>$request->sekretaris,
    //             'bendahara'=>$request->bendahara,
    //     ]);
    //     return redirect('/pengelola/dataPosyandu')->with('success', 'Data Berhasil Diubah!');
    }
