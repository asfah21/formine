<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp;

class Exca extends Model
{
    use HasFactory;

    protected $table = 'excas'; //Arahkan ke tabel db langsung

    protected $fillable = [

        'ex_id',
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

        'track',
        'roller_track',
        'idler',
        'sprocket',
        'motor_travel',
        'tangga_pggn',
        'lampu_mk_blk',
        'selang_pipa',
        'tangki_hidrolik',
        'bucket',
        'boom_bucket',
        'stick_arm_bucket',
        'battery',
        'ruang_mesin',
        'indikator_srg_udara',
        'pemadam_api',
        'kabin_opr',
        'jendela_pintu',
        'kipas_kaca',
        'kaca_spion',
        'ems_cms',
        'handle_control',
        'level_oli_mesin',
        'level_oli_hidrolik',
        'level_air_radiator',

        'pemadam_api2',
        'seat_belt',
        'tricon',

        'kebersihan',

        'level_oli_mesin2',
        'level_oli_hidrolik2',
        'level_oli_swing',
        'seats',
        'ac',
        'kemudi_stir',
        'throttle',
        'tuas_rem_parkir',
        'tuas_kontrol',
        'klakson',
        'kabin_operator',
        'lampu_mk_blk2',
        'lampu_kabin',
        'ems',
        'switch_work_mode',
        'switch_power_mode',
        'switch_aec',
        'radio',
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',
        'suara_mesin',
        'suara_trans',

        'stir_kemudi',
        'klakson_travel',
        'ems_cms3',
        'sistem_hidrolik',
        'lampu_peringatan',
        'strobe'

    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function ($model) {
            SendFormToGsiCorp::dispatch('p2h_exca', $model->toArray());
        });
    }
}
