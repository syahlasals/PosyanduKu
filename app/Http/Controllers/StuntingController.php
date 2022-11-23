<?php

namespace App\Http\Controllers;
use App\Models\Anak;
use App\Models\Stunting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

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

    public function tampilFormSdidtk($nik_anak)
    {
        return view('entry.formSdidtk.index',[
            "nik_anak" => $nik_anak
        ]);
    }

    public function tampilDataStunting()
    {
        $sdidtks = Stunting::all();
        return view('pengelola.dataStunting.index', compact('sdidtks'));
    }
    
    public function hitungAnak()
    {
        $anaks = Anak::count();
        return view('pengelola.dataStunting.index', compact('anaks'));
    }

    public function charts()
    {
        $groups = DB::table('tb_anak')
                            ->select('tmp_anak', DB::raw('count(*) as total'))
                            ->groupBy('tmp_anak')
                            ->pluck('total', 'tmp_anak')->all();
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
            'kpsp'=>'required|in:1,0',
            'tdd'=>'required|in:1,0',
            'tdl'=>'required|in:1,0',
            'kmpe'=>'required|in:1,0',
            'mchat'=>'required|in:1,0',
            'gpph'=>'required|in:1,0'
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
            'gpph'=>$request->gpph
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
