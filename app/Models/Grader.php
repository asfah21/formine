<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp;

class Grader extends Model
{
    use HasFactory;

    //protected $table = 'grades'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'mg_id',
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

        'ban_mk_blk',
        'tandem',
        'tangga_pggn',
        'lampu_mk_blk',
        'selang_pipa_hidro',
        'tangki_hidro',
        'tabung_accu',
        'blade',
        'cutting_edge',
        'circle_blade',
        'goose_neck',
        'silinder_hidro',
        'silinder_arti',
        'battery',
        'indiaktor_saringan_udara',
        'kabin_opr',
        'wiper',
        'kaca_spion',
        'handle_control',
        'tabung_angin',
        'klakson_mdr',
        'level_air_radi',

        'pemadam_api',
        'seat_belt',
        'ganjal_ban',
        'tricon',

        'kebersihan',

        'level_oli_mesin',
        'level_oli_trans',
        'level_oli_hidro',
        'tekanan_angin',
        'seats',
        'ac',
        'kemudi_stir',
        'pengatur_stir',
        'pedal_rem',
        'pedal_gas',
        'pedal_modul',
        'tuas_gigi',
        'throttle',
        'tuas_rem_parkir',
        'klakson',
        'lampu_mk_blk2',
        'lampu_kabin',
        'ems_cms',
        'gauge',
        'radio',
        'emergency_steering',
        'radio2', //ganti menjadi ruang_mesin
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',
        'kebocoran_udara',

        'suara_mesin',
        'suara_trans',

        'stir_kemudi',
        'rem_kaki',
        'rem_parkir',
        'gigi_pers',
        'klakson_mdr2',
        'lampu_peringatan',
        'ems_cms2',
        'sistem_hidro',
        'strobe'

    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function ($model) {
            SendFormToGsiCorp::dispatch('p2h_grader', $model->toArray());
        });
    }
}
