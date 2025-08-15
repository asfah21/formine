<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compactor extends Model
{
    use HasFactory;

    //protected $table = 'compators'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'cp_id',
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

        'ban_blk',
        'drum',
        'tangga',
        'lampu_mk_blk',
        'selang_pipa_hidro',
        'tangki_hidro',
        'battery_aki',
        'ruang_mesin',
        'saringan_udara',
        'kabin_opr',
        'jendela_pintu',
        'wiper',
        'kaca_spion',
        'handle_control',
        'level_oli_mesin',
        'level_oli_hidro',
        'level_air_radiator',

        'pemadam_api',
        'seat_belt',
        'tricon',

        'kebersihan',

        'level_oli_mesin2',
        'level_oli_trans',
        'level_oli_hidro2',
        'level_bahan_bakar',
        'seats',
        'ac',
        'kemudi_stir',
        'pedal_rem',
        'pedal_gas',
        'gas_tangan',
        'tuas_gigi_trans',
        'tuas_maju_mdr',
        'tuas_rem_parkir',
        'klakson',
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
        'suara_trans',

        'stir_kemudi2',
        'rem_kaki',
        'rem_parkir',
        'gigi_pers',
        'klakson_mdr',
        'lampu_peringatan',
        'ems_cms2',
        'sistem_hidro',
        'gauge2',
        'strobe'

    ];
}
