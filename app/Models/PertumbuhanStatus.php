<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertumbuhanStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_pertumbuhan";
    protected $table = "tb_pertumbuhan";
    protected $dates = ['tgl_hitung'];

    public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }
}

