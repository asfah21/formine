<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dumptruck extends Model
{
    use HasFactory;

    //protected $table = 'dumptrucks'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'dt_id',
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

        'ban_muka_blk',
        'tangga_pggn',
        'lampu_muka_blk',
        'selang_pipa',
        'tangki_hidrolik',
        'tangki_udara',
        'tabung_accu',
        'hoist',
        'silinder_hidrolik',
        'pto',
        'battery_aki',
        'ruang_mesin',
        'tali_kipas',
        'saringan_udara',
        'kabin_operator',
        'wiper',
        'spion',
        'ems_cms',
        'handle_kontrol',
        'knalpot',
        'klakson_mdr',
        'lampu_ptr',
        'pin_dump',

        'pemadam_api',
        'seat_belt',
        'radio',
        'ganjal_ban',
        'tricon',
        'kebersihan_equip',

        'level_oli_mesin',
        'level_oli_trans',
        'level_oli_hidrolik',
        'level_bahan_bakar',
        'saringan_udara2',
        'tekanan_udara',
        'seat_tempat_ddk',
        'gauge',
        'kemudi_stir',
        'pengatur_stir',
        'pedal_rem',
        'pedal_gas',
        'retarder',
        'tuas_gigi',
        'gas_tangan',
        'tuas_rem_parkir',
        'klakson',
        'lampu_muka_blk2',
        'lampu_kabin',
        'ems_cms_2',
        'ac',
        'radio2',
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',
        'kebocoran_udara',
        'batu_disela_roda',

        'suara_mesin',
        'suara_transmisi',
        'suara_diff',

        'stir_kemudi',
        'retarder2',
        'rem_kaki',
        'rem_parkir',
        'gigi_pers',
        'klakson_mundur',
        'lampu_peringatan',
        'ems_cms3',
        'sistem_hidrolik',
        'gauge2'

    ];
}
