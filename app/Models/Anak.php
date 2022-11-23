<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "tb_anak";
    protected $primaryKey = 'nik_anak';
    protected $fillable = [
        'no_kk',
        'nik_anak',
        'nama_anak',
        'jenkel_anak',
        'tgl_anak',
        'tmp_anak',
        'golongan_darah'
    ];
        public function vaksins()
    {
        return $this->hasMany(Vaksin::class, 'nik_anak');
    }
    public function vitamins()
    {
        return $this->hasMany(Vitamin::class, 'nik_anak');
    }
    public function tumbuhs()
    {
        return $this->hasMany(PertumbuhanStatus::class, 'nik_anak');
    }
}
