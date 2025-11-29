<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Towerlamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'tl_id',
        'nama_driver',
        'departemen',
        'pengawas',
        'date',
        'time',
        'pesan',
        'approve',
        'status',
        'no_unit',
        'hm_next_service',
        'start_hm',
        'finish_hm',
        'shift',

        'jack_tl',
        'baut_cover',
        'kelengkapan_tl',
        'sebelum_mesin_hidup',
        'jumlah_solar',
        'level_oli_mesin',
        'kebocoran_oli_mesin',
        'level_air_battery',
        'level_air_radiator',
        'kebocoran_solar',
        'kabel_wiring_kendor',
        'instalasi_kabel_power',
        'setelah_mesin_hidup',
        'panaskan_mesin',
        'meteran_normal',
        'selector_on',
        'suara_getaran_normal',
        'kondisi_switch'

    ];
}
