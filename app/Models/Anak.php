<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Blameable;
use PDF;



class Anak extends Model
{
    use HasFactory;

    use Blameable;
    public $timestamps = false;
    protected $table = "tb_anak";
    protected $primaryKey = 'nik_anak';
    protected $dates = ['tgl_anak'];
    protected $fillable = [
        'no_kk',
        'nik_anak',
        'nama_anak',
        'jenkel_anak',
        'tgl_anak',
        'tmp_anak',
        'tahun',
        'bulan',
        'hari',
        'golongan_darah'
    ];

    public function ortus()
    {
        return $this->belongsTo(Ortu::class, 'no_kk');
    }
    
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

    public function penyimpangans()
    {
        return $this->hasMany(Penyimpangan::class, 'nik_anak');
    }
}
