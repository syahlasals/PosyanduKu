<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyimpangan extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = true;
    protected $table = "tb_pertumbuhan";
    protected $dates = ['tgl_hitung'];
    protected $fillable = [
       'kode_pertumbuhan','nik_anak','hasil_imt','riwayat_penyakit','status_penyimpangan','tgl_hitung'];

    public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }
}
