<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "kode_pertumbuhan";
    protected $table = "tb_sdidtk";
    protected $fillable = [
       'kode_pertumbuhan','bb/tb','tb/u','kpsp', 'tdd', 'tdl', 'smpe', 'mchat', 'gpph'];
}
