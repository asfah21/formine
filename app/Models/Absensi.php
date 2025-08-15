<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';

    protected $fillable = [
        'sesi_absensi_id',
        'name',
        'jabatan',
        'jam_tidur',
        'sehat',
        'pemateri',

        'dept',
        'photo',
        'ttd',
    ];



    public function sesi()
    {
        return $this->belongsTo(SesiAbsensi::class, 'sesi_absensi_id');
    }
}
