<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SesiAbsensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda',
        'judul',
        'lokasi',
        'jabatan',

        'name',
        'unique_code',
        'duration',
        'start_time',
        'end_time'
    ];

    // Setter untuk otomatis menghitung waktu berakhir sesi
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($sesi) {
            $sesi->start_time = now();
            $sesi->end_time = Carbon::parse($sesi->start_time)->addHours((int) $sesi->duration);
            $sesi->unique_code = $sesi->unique_code ?? Str::random(10);
        });
    }

    // Cek apakah sesi masih aktif
    public function isActive()
    {
        return now()->lessThan($this->end_time);
    }

    //Tambahan Filament
    protected $casts = [
        'start_time' => 'datetime',
    ];

    public function getEndTimeAttribute()
    {
        return $this->start_time->addHours($this->duration);
    }

    public function absensi()
    {
        // return $this->hasMany(Absensi::class);
        return $this->hasMany(Absensi::class, 'sesi_absensi_id', 'id');
    }
}
