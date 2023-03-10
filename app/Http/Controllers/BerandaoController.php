<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BerandaoController extends Controller
{
    public function index()
    {
        $ortus = Ortu::all();
        return view('ortu.index', compact('ortus'));  
    }

    // public function show()
    // {
    //     $ortus = ProfileOrtu::all();
    //     return view('ortu.index', compact('ortus'));  
    // }

    public function create()
    {
        return view('ortu.anak.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk'=>'required',
            'nik_ayah'=>'required',
            'nik_ibu'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'pekerjaan_ayah'=>'required',
            'pekerjaan_ibu'=>'required',
            'alamat_ortu'=>'required',
            'rt'=>'required',
            'rw'=>'required'
        ]);
        
        $nokk_ortu = Ortu::where('no_kk', $request->no_kk)->first();
        $nikayah = Str::length($request->nik_ayah);
        $nikibu = Str::length($request->nik_ibu);
        $nokk = Str::length($request->no_kk);
        $rw = $request->rw;

        if($nokk_ortu != null ){
            return back()->with('nokk_ortu', 'No KK sudah terdaftar!');
        }elseif($nokk > 16) {
            return back()->with('nokk', 'No KK tidak sesuai ketentuan!');
        }elseif($nokk < 16){
            return back()->with('nokk', 'No KK tidak sesuai ketentuan!');
        }elseif($nikayah > 16 ){
            return back()->with('nikayah', 'NIK Ayah tidak sesuai ketentuan!');
        }elseif($nikayah < 16) {
            return back()->with('nikayah', 'NIK Ayah tidak sesuai ketentuan!');
        }elseif($nikibu > 16 ){
            return back()->with('nikibu', 'NIK Ibu tidak sesuai ketentuan!');
        }elseif($nikibu < 16) {
            return back()->with('nikibu', 'NIK Ibu tidak sesuai ketentuan!');
        }elseif($rw > 5) {
            return back()->with('rw', 'Maaf RW anda tidak terdaftar di Posyandu ini!');
        }else{

        Ortu::create([
            'no_kk'=>$request->no_kk,
            'nik_ayah'=>$request->nik_ayah,
            'nik_ibu'=>$request->nik_ibu,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu,
            'alamat_ortu'=>$request->alamat_ortu,
            'rt'=>$request->rt,
            'rw'=>$request->rw
        ]);

        return redirect('/redirects')->with('success', 'Data Berhasil di Tambahkan!');
        }
    }

    public function index2()
    {
        $ortus = Ortu::all();
        return view('entry.daftarOrtu.index', compact('ortus'));  
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'no_kk'=>'required',
            'nik_ayah'=>'required',
            'nik_ibu'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'pekerjaan_ayah'=>'required',
            'pekerjaan_ibu'=>'required',
            'alamat_ortu'=>'required',
            'rt'=>'required',
            'rw'=>'required'
        ]);

        $nokk_ortu = Ortu::where('no_kk', $request->no_kk)->first();
        $nikayah = Str::length($request->nik_ayah);
        $nikibu = Str::length($request->nik_ibu);
        $nokk = Str::length($request->no_kk);
        $rw = $request->rw;
        
        if($nokk_ortu != null ){
            return back()->with('nokk_ortu', 'No KK sudah terdaftar!');
        }elseif($nokk > 16) {
            return back()->with('nokk', 'No KK tidak sesuai ketentuan!');
        }elseif($nokk < 16){
            return back()->with('nokk', 'No KK tidak sesuai ketentuan!');
        }elseif($nikayah > 16 ){
            return back()->with('nikayah', 'NIK Ayah tidak sesuai ketentuan!');
        }elseif($nikayah < 16) {
            return back()->with('nikayah', 'NIK Ayah tidak sesuai ketentuan!');
        }elseif($nikibu > 16 ){
            return back()->with('nikibu', 'NIK Ibu tidak sesuai ketentuan!');
        }elseif($nikibu < 16) {
            return back()->with('nikibu', 'NIK Ibu tidak sesuai ketentuan!');
        }elseif($rw > 5) {
            return back()->with('rw', 'Maaf RW anda tidak terdaftar di Posyandu ini!');
        }else{

        Ortu::create([
            'no_kk'=>$request->no_kk,
            'nik_ayah'=>$request->nik_ayah,
            'nik_ibu'=>$request->nik_ibu,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'pekerjaan_ayah'=>$request->pekerjaan_ayah,
            'pekerjaan_ibu'=>$request->pekerjaan_ibu,
            'alamat_ortu'=>$request->alamat_ortu,
            'rt'=>$request->rt,
            'rw'=>$request->rw
        ]);

        return redirect('/entry/pendaftaranAnak')->with('success', 'Data Berhasil di Tambahkan');
    }
    }

    public function tampilsatu()
    {
        $max_rw = 1;
        $rwsatu = DB::select('CALL get_users_by_rw(?)', array($max_rw));
        return view('pengelola.dataOrtu.tampilsatu', compact('rwsatu'));
    }

    public function tampildua()
    {
        $max_rw = 2;
        $rwdua = DB::select('CALL get_users_by_rw(?)', array($max_rw));
        return view('pengelola.dataOrtu.tampildua', compact('rwdua'));
    }

    public function tampiltiga()
    {
        $max_rw = 3;
        $rwtiga = DB::select('CALL get_users_by_rw(?)', array($max_rw));
        return view('pengelola.dataOrtu.tampiltiga', compact('rwtiga'));
    }

    public function tampilempat()
    {
        $max_rw = 4;
        $rwempat = DB::select('CALL get_users_by_rw(?)', array($max_rw));
        return view('pengelola.dataOrtu.tampilempat', compact('rwempat'));
    }

    public function tampillima()
    {
        $max_rw = 5;
        $rwlima = DB::select('CALL get_users_by_rw(?)', array($max_rw));
        return view('pengelola.dataOrtu.tampillima', compact('rwlima'));
    }

}