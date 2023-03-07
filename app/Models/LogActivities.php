<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogActivities extends Model
{
    use HasFactory;
    use Blameable;

    public $timestamps = false;
    protected $table = 'log_activities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik_anak',
        'nama_tabel', 
        'deskripsi', 
        'sebelum', 
        'sesudah', 
        'action_date', 
        'created_by', 
        'aktif'
    ];

    // ini prosedure mungkin
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });
        static::saving(function ($model) {
            $model->updated_by = Auth::id();
        });
    }
    // $dataKamu->orderByDesc('kolom_bruto')->get();
}
