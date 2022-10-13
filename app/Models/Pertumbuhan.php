<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertumbuhan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_pertumbuhan";
    protected $table = "tb_detailpertumbuhan";
    protected $fillable = [
       'kode_pertumbuhan', 'tinggi','berat', 'lingkar_kepala'];
}
