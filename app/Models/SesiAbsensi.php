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

    /**
     * Casting kolom untuk memastikan type data aman.
     */
    protected $casts = [
        'start_time' => 'datetime',
        'end_time'   => 'datetime',
        'duration'   => 'integer',   // PENTING!
    ];

    /**
     * Boot model — hitung end_time otomatis saat membuat sesi baru.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($sesi) {

            // Set start_time default jika tidak diberikan
            $sesi->start_time = $sesi->start_time ?? now();

            // Jika duration null atau bukan angka → set minimal 1 jam
            $duration = (int) ($sesi->duration ?? 1);

            // Hitung end_time
            $sesi->end_time = Carbon::parse($sesi->start_time)->addHours($duration);

            // Generate unique code jika belum ada
            $sesi->unique_code = $sesi->unique_code ?? Str::random(10);
        });
    }

    /**
     * Cek apakah sesi masih aktif (sebelum end_time).
     */
    public function isActive()
    {
        return now()->lessThan($this->end_time);
    }

    /**
     * Relasi ke absensi.
     */
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'sesi_absensi_id', 'id');
    }
}
