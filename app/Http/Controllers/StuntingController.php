<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Stunting;
use App\Models\Penyimpangan;
use App\Models\Pertumbuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class StuntingController extends Controller
{
    public function index($nik_anak)
    {
        $sdidtks = Stunting::where('nik_anak', $nik_anak)->get();
        $anak = Anak::where('nik_anak', $nik_anak)->first();
        return view('entry.sdidtkAnak.index', compact('sdidtks','anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */

    public function tampilFormSdidtk($nik_anak)
    {
        $kode_pertumbuhan = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        $tgl_hitung = Pertumbuhan::where('nik_anak', $nik_anak)->first();
        return view('entry.formSdidtk.index',[
            "nik_anak" => $nik_anak,
            "kode_pertumbuhan" =>  $kode_pertumbuhan,
            "tgl_hitung" =>  $tgl_hitung,
        ]);
    }

    public function tampilDataStunting()
    {
        $semua = Anak::count();
        $normal = Penyimpangan::where('status_penyimpangan','Normal')->count();
        $gejalastunting = Penyimpangan::where('status_penyimpangan','Gejala Stunting')->count();
        $stunting = Penyimpangan::where('status_penyimpangan','Stunting')->count();
        return view('pengelola.dataImunisasi.index', [
            'semua' => $semua,
            'normal' => $normal,
            'gejalastunting' => $gejalastunting,
            'stunting' => $stunting,
        ]);
    }
    
    // public function hitungAnak()
    // {
    //     $anaks = Anak::count();
    //     return view('pengelola.dataStunting.index', compact('anaks'));
    // }

    public function charts()
    {
        $groups = DB::table('tb_pertumbuhan')
                            ->select('status_penyimpangan', DB::raw('count(*) as total'))
                            ->groupBy('status_penyimpangan')
                            ->pluck('total', 'status_penyimpangan')->all();
        for ($i=0; $i<=count($groups); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;

        return view('pengelola.index', compact('chart'));
    
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
            'kpsp',
            'tdd',
            'tdl',
            'kmpe',
            'mchat',
            'gpph',
            'tgl_hitung'=>'required',
        ]);

        // return redirect('/entry/InputImunisasi')->with('success', 'Data SDIDTK berhasil di tambahkan');

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
            'gpph'=>$request->gpph,
            'tgl_hitung'=>$request->tgl_hitung,
        ]);

        return redirect('/entry/InputImunisasi')->with('success', 'Data SDIDTK berhasil di tambahkan');
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
