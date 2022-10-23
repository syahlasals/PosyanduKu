<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileOrtu extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_kk';
    public $timestamps = false;
    protected $table = "tb_ortu";
    protected $fillable = [
       'no_kk', 'alamat_ortu', 'rt', 'rw', 'nama_ayah','pekerjaan_ayah', 'nik_ayah', 'nama_ibu', 'pekerjaan_ibu', 'nik_ibu' ];

}
