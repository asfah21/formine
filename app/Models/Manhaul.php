<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp;

class Manhaul extends Model
{
    use HasFactory;

    //protected $table = 'manhauls'; //Arahkan ke tabel db langsung

    protected $fillable =[
        'mh_id',
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

        'kaca_depan',
        'kaca_spion',
        'wiper',

        'lampu_besar',
        'lampu_kecil',
        'lampu_sein',
        'lampu_mundur',
        'lampu_kabut',
        'kaca_jdl_pnpg',
        'tangga_pnpg',
        'tangki_angin',
        'baut_mur',
        'ban_kondisi',
        'per_baut_mur',
        'tali_kipas',
        'tangki_solar',
        'level_oli_mesin',
        'level_air_radiator',
        'level_oli_steering',
        'level_oli_trans',
        'fenders',
        'cat',
        'kap_mesin',

        'pemadam_api',
        'seat_belt',
        'radio',
        'ganjal_ban',
        'tricon',

        'kebersihan',

        'oli_mesin_tek',
        'air_pendingin',
        'angin_tekanan',
        'solar_isi_tangki',
        'klakson_angin',
        'klakson_listrik',
        'lampu_dim',
        'lampu_kecil2',
        'lampu_sen',
        'lampu_rem',
        'lampu_kabut2',
        'lampu_kabin',
        'lampu_pnpg',
        'tachometer',
        'hilo_switch',
        'pedal_gas',
        'seats',
        'fan',
        'bel_pnpg',
        'ac',
        'radio2',
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',
        'kebocoran_udara',

        'suara_mesin',
        'suara_trans',
        'suara_diff',

        'stir_kemudi',
        'lampu_mundur2',
        'rem_kaki',
        'rem_parkir',
        'gigi_pers',
        'klakson_mundur',
        'lampu_peringatan',
        'ems_cms',
        'retarder',
        'strobe',
        'created_at',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function ($model) {
            SendFormToGsiCorp::dispatch('p2h_manhaul', $model->toArray());
        });
    }
}
