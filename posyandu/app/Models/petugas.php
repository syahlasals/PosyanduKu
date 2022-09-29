<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "nip";
    protected $table = "tb_petugas";
    protected $fillable = [
       'nip', 'nama_petugas','jenkel_petugas', 'jabatan', 'alamat_petugas' ];
}
