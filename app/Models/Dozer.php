<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dozer extends Model
{
    use HasFactory;

    //protected $table = 'dozers'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'bd_id',
        'nama_driver',
        'departemen',
        'pengawas',
        'date',
        'time',
        'pesan',
        'approve',
        'status', //bisa digunakan sebagai ttd_admin
        'no_unit',
        'hm_next_service',
        'start_hm',
        'finish_hm',
        'shift',

        'idler',
        'kap_trunion',
        'final_drive',
        'segmen_sprocket',
        'pemadam_api',
        'lampu_mk_blk',
        'track',
        'roller_track',
        'ripper',
        'bettery',
        'pivot_shaft',
        'saringan_udara',
        'silinder_tilt',
        'silinder_lift',
        'ruang_mesin',
        'tangga_pggn',
        'kabin_luar',
        'kabin_opr',
        'jendela_pintu',
        'kipas_kaca',
        'kaca_spion',
        'handle_control',
        'level_oli_mesin',
        'level_oli_hidro',
        'level_air_radiator',

        'pemadam_api2',
        'seat_belt',
        'tricon',

        'kebersihan',

        'level_oli_mesin2',
        'level_oli_trans',
        'level_oli_pivot',
        'level_oli_hidro2',
        'seats',
        'ac',
        'tuas_control',
        'trottle',
        'pedal_dece',
        'kemudi',
        'tuas_trans',
        'pedal_rem',
        'tuas_rem',
        'klakson',
        'kabin_opr2',
        'lampu_mk_blk2',
        'lampu_kabin',
        'ems_cms',
        'gauge',
        'radio',
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',

        'suara_mesin',
        'suara_transmisi',

        'stir_kemudi',
        'rem_kaki',
        'gigi_pers',
        'klakson_mdr',
        'lampu_peringatan',
        'ems_cms2',
        'sistem_hidro',
        'strobe',

    ];
}
