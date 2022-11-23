<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Stunting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response/
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

        return redirect('/pengelola/dataAnak')->with('success', 'Data Berhasil di Tambahkan');
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
        return redirect('/pengelola/dataAnak')->with('success', 'Data Berhasil Diubah!');
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
        return redirect('/pengelola/dataAnak')->with('success', 'Data Berhasil Dihapus!');
    }

    // PETUGAS ENTRY
    public function indexInputImunisasi()
    {
        $anaks = Anak::all();
        return view('entry.inputImunisasi.index', compact('anaks'));
    }

    public function historyImunisasi()
    {
        return view('entry.historyImunisasi.index');
    }

    public function pertumbuhan()
    {
        return view('entry.pertumbuhan.index');
    }

    // public function stunting($nik_anak)
    // {
    //     $sdidtks = Stunting::find($nik_anak);
    //         return view('entry.sdidtkAnak.index',[
    //             "sdidtk" => $sdidtks
    //     ]);
    // }

    // public function vaksin()
    // {
    //     return view('entry.InputImunisasi.vaksin');
    // }

    // public function vitamin()
    // {
    //     return view('entry.InputImunisasi.vitamin');
    // }

    // public function search(Request $request)
    // {

    //     $output="";

    //     $anaks=Anak::where('nama_anak', 'Like', '%'.$request->
    //         search.'%')->orWhere('no_kk', 'Like', '%'.$request->
    //         search.'%')->orWhere('nik_anak', 'Like', '%'.$request->
    //         search.'%')->get();

    //     // foreach($anaks as $anak)
    //     // {
    //     //     $output.=

    //     //     '<tr>
            
    //     //     <td> '.$anak->nama_anak.' </td>
            
    //     //     <tr>';
    //     // }

    //     foreach ($anaks as $key => $anak)

    //         $output.=
    //             '<tr>
    //                 <td> '.$key + 1..' </td>
    //                 <td> '.$anak->no_kk.' </td>
    //                 <td> '.$anak->nik_anak.'</td>
    //                 <td> '.$anak->nama_anak.'</td>
    //                 <td> '.$anak->tmp_anak.', '.$anak->tgl_anak.'</td>
    //                 <td> '.$anak->jenkel_anak.'</td>
    //                 <td> '.$anak->golongan_darah.' </td>

    //                 <td>
    //                 '.'
    //                     <a href="/anak/'.$anak->nik_anak.'/edit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
    //                 '.'
    //                     <a href="/anak/'.$anak->nik_anak.'" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
    //                 '.'
    //                 </td>
    //             </tr>';

    //     return response($output);
    // }
}
