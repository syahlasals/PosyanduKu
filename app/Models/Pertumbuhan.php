<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertumbuhan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_pertumbuhan";
    protected $table = "tb_detailpertumbuhan";
    protected $fillable = [
       'kode_pertumbuhan', 'nik_anak', 'tinggi','berat', 'lingkar_kepala'];
       
       public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }

}
    