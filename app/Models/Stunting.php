<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = true;
    // protected $primaryKey = "kode_pertumbuhan";
    protected $table = "tb_sdidtk";
    protected $fillable = [
       'kode_pertumbuhan','bb_tb','tb_u','lk','kpsp', 'tdd', 'tdl', 'kmpe', 'mchat', 'gpph', 'nik_anak', 'tgl_hitung'];

    public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }
}
