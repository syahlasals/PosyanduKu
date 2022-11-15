<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = true;
    protected $primaryKey = "kode_vaksin";
    protected $table = "tb_vaksin";
    protected $fillable = [
       'kode_vaksin','nik_anak', 'jenis_vaksin'];

       public function Anak()
    {
        return $this->hasOne(Anak::class, 'nik_anak');
    }
}