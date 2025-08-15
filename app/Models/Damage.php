<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;

    protected $fillable = [
        'laptop_id',
        'damage_type',
        'description',

        'keyboard',
        'touchpad',
        'layar',
        'port_usb',
        'antivirus',
        'os',
        'driver',
        'battery',
        'suhu',
        'audio',
        'koneksi_nirkabel',
        'antenna',
        'tombol_control',
        'toner_tinta',
        'kabel_daya',
        'mic_ptt',
        'camera',
        'storage',

        'reported_at'

    ];

    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }
}
