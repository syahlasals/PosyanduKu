<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_vitamin";
    protected $table = "tb_vitamin";
    protected $fillable = [
       'kode_vitamin', 'nip','nik_anak', 'jenis_vitamin'];

       public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }

}