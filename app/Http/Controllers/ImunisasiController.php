<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Imunisasi;
use App\Models\Penyimpangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImunisasiController extends Controller
{
    public function index()
    {
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();
        return view('pengelola.dataImunisasi.index', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas
        ]);
    }

    public function normal()
    {
        $anaks = Anak::wherehas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->with(['penyimpangans', 'vaksins', 'vitamins', 'tumbuhs'])->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.normal', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas
        ]);
    }

    public function giziBuruk()
    {
        $anaks = Anak::wherehas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->with(['penyimpangans', 'vaksins', 'vitamins', 'tumbuhs'])->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.giziBuruk', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas
        ]);
    }

    public function stunting()
    {
        $anaks = Anak::wherehas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->with(['penyimpangans', 'vaksins', 'vitamins', 'tumbuhs'])->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.stunting', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas
        ]);
    }

    public function obesitas()
    {
        $anaks = Anak::wherehas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->with(['penyimpangans', 'vaksins', 'vitamins', 'tumbuhs'])->get();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.obesitas', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas
        ]);
    }

    public function cetakSemua()
    {
        $tanggal = date('l, d F y');
        $anaks = Anak::all();
        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.cetak.cetakSemua', [
            'anakList' => $anaks,
            'semua' => $semua,
            'normal' => $normal,
            'giziBuruk' => $giziBuruk,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal
        ]);
    }

    public function cetakNormal()
    {
        $tanggal = date('d F y');
        $anaks = Anak::join('tb_vaksin', 'tb_vaksin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_vitamin', 'tb_vitamin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_pertumbuhan', 'tb_pertumbuhan.nik_anak', '=', 'tb_anak.nik_anak')
            ->where('tb_pertumbuhan.status_penyimpangan', 'Normal')
            ->get(['tb_anak.nik_anak', 'tb_anak.nama_anak', 'tb_vaksin.jenis_vaksin', 'tb_vaksin.tgl_vaksin', 'tb_vitamin.jenis_vitamin', 'tb_vitamin.tgl_vitamin', 'tb_pertumbuhan.status_penyimpangan']);

        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.cetak.cetakNormal', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal
        ]);
    }

    public function cetakGiziBuruk()
    {
        $tanggal = date('d F y');
        $anaks = Anak::join('tb_vaksin', 'tb_vaksin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_vitamin', 'tb_vitamin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_pertumbuhan', 'tb_pertumbuhan.nik_anak', '=', 'tb_anak.nik_anak')
            ->where('tb_pertumbuhan.status_penyimpangan', 'Gizi Buruk')
            ->get(['tb_anak.nik_anak', 'tb_anak.nama_anak', 'tb_vaksin.jenis_vaksin', 'tb_vaksin.tgl_vaksin', 'tb_vitamin.jenis_vitamin', 'tb_vitamin.tgl_vitamin', 'tb_pertumbuhan.status_penyimpangan']);

        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.cetak.cetakGiziBuruk', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal
        ]);
    }

    public function cetakStunting()
    {
        $tanggal = date('d F y');
        $anaks = Anak::join('tb_vaksin', 'tb_vaksin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_vitamin', 'tb_vitamin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_pertumbuhan', 'tb_pertumbuhan.nik_anak', '=', 'tb_anak.nik_anak')
            ->where('tb_pertumbuhan.status_penyimpangan', 'Stunting')
            ->get(['tb_anak.nik_anak', 'tb_anak.nama_anak', 'tb_vaksin.jenis_vaksin', 'tb_vaksin.tgl_vaksin', 'tb_vitamin.jenis_vitamin', 'tb_vitamin.tgl_vitamin', 'tb_pertumbuhan.status_penyimpangan']);

        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.cetak.cetakStunting', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal
        ]);
    }
    public function cetakObesitas()
    {
        $tanggal = date('d F y');
        $anaks = Anak::join('tb_vaksin', 'tb_vaksin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_vitamin', 'tb_vitamin.nik_anak', '=', 'tb_anak.nik_anak')
            ->join('tb_pertumbuhan', 'tb_pertumbuhan.nik_anak', '=', 'tb_anak.nik_anak')
            ->where('tb_pertumbuhan.status_penyimpangan', 'Obesitas')
            ->get(['tb_anak.nik_anak', 'tb_anak.nama_anak', 'tb_vaksin.jenis_vaksin', 'tb_vaksin.tgl_vaksin', 'tb_vitamin.jenis_vitamin', 'tb_vitamin.tgl_vitamin', 'tb_pertumbuhan.status_penyimpangan']);

        $semua = Anak::count();
        $normal = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Normal');
        })->count();
        $giziBuruk = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Gizi Buruk');
        })->count();
        $obesitas = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Obesitas');
        })->count();        
        $stunting = Anak::whereHas('penyimpangans', function ($query) {
            return $query->where('status_penyimpangan', 'Stunting');
        })->count();        
        return view('pengelola.dataImunisasi.cetak.cetakObesitas', [
            'anakList' => $anaks,
            'semua' => $semua,
            'giziBuruk' => $giziBuruk,
            'normal' => $normal,
            'stunting' => $stunting,
            'obesitas' => $obesitas,
            'tanggal' => $tanggal
        ]);
    }
}
