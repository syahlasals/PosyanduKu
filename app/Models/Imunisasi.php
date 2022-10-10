<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_imunisasi";
    protected $table = "tb_imunisasi";
    protected $fillable = [
       'kode_imunisasi','id_posyandu','kode_vaksin','kode_vitamin', 'nip', 'nik_anak', 'kode_pertumbuhan', 'tgl_imunisasi'];
}