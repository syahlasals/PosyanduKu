<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profile extends Model
{
    use Blameable;

    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_posyandu";
    protected $primaryKey = 'id_posyandu';
    protected $fillable = [
        'id_posyandu', 'nama_posyandu', 'alamat_posyandu', 'nama_rt', 'nama_rw', 'ketua', 'sekretaris', 'bendahara'];
}