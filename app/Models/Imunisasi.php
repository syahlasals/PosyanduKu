<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_imunisasi";
    public function profiles()
    {
        return $this->belongsTo(Profile::class, 'id_posyandu');
    }
    public function anaks()
    {
        return $this->belongsTo(Anak::class, 'nik_anak');
    }
    public function pertumbuhans()
    {
        return $this->belongsTo(Pertumbuhan::class, 'kode_pertumbuhan');
    }
    public function pertumbuhanstatuss()
    {
        return $this->belongsTo(PertumbuhanStatus::class, 'kode_pertumbuhan');
    }
    public function vaksins()
    {
        return $this->belongsTo(Vaksin::class, 'kode_vaksin');
    }
    public function vitamins()
    {
        return $this->belongsTo(Vitamin::class, 'kode_vitamin');
    }
  

}