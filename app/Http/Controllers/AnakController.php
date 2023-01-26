<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anak;
use App\Models\Ortu;
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
        $lahir = Carbon::createFromFormat('Y-m-d', $request->tgl_anak);
        $date = Carbon::parse($lahir)->diff(Carbon::now())->format('%y,%m,%d');
        $umur = explode(',', $date);

        $anaks = Anak::find($nik_anak);
        
        $anaks->update(['no_kk'=>$request->no_kk,
        'nik_anak'=>$request->nik_anak,
        'nama_anak'=>$request->nama_anak,
        'jenkel_anak'=>$request->jenkel_anak,
        'tgl_anak'=>$request->tgl_anak,
        'tmp_anak'=>$request->tmp_anak,
        'tahun' => $umur[0],
        'bulan' => $umur[1],
        'hari' => $umur[2],
        'golongan_darah'=>$request->golongan_darah]);
        return redirect('/pengelola/dataAnak')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        // return redirect('/admin/users');

        $anak = Anak::find($id);
        $anak->delete();
        return redirect('/pengelola/dataAnak');
    }

    // PETUGAS ENTRY
    public function indexInputImunisasi()
    {
        $anaks = Anak::with('ortus')->get();
        return view('entry.InputImunisasi.index', ['anakList' => $anaks]);
        // // $anaks = Anak::all();
        // // $ortus = Ortu::whereHas('no_kk', $no_kk)->get();
        // $ortus = Ortu::whereHas('anaks', function ($query) {
        //     return $query->where('no_kk', $no_kk);
        // })->get();
        // // $ortus = Ortu::where('no_kk', $no_kk)->get();
        // return view('entry.inputImunisasi.index', [ 
        //     'anaks' => $anaks, 
        //     'ortus' => $ortus
        //     ]);
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
