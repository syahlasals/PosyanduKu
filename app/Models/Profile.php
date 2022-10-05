<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_posyandu";
    protected $fillable = [
       'id_posyandu', 'nama_posyandu','alamat_posyandu', 'nama_rt', 'nama_rw', 'ketua', 'sekretaris', 'bendahara' ];
}