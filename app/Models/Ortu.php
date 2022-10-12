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
        'no_kk',
        'nik_anak',
        'nama_anak',
        'jenkel_anak',
        'tgl_anak',
        'tmp_anak',
        'golongan_darah'
    ];
}
