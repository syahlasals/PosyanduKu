<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "tb_ortu";
    protected $primaryKey = 'no_kk';
    protected $fillable = [
        'no_kk', 'alamat_ortu', 'rt', 'rw', 'nama_ayah','pekerjaan_ayah', 'nik_ayah', 'nama_ibu', 'pekerjaan_ibu', 'nik_ibu'];
}
