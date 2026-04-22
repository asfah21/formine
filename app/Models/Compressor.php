<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp;

class Compressor extends Model
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

        'kebersian_mesin',
        'switch',
        'periksa_hose',
        'periksa_sebelum_mesin_hidup',
        'periksa_kondisi_level_solar',
        'periksa_kondisi_level_oli_mesin',
        'periksa_kondisi_kebocoran_oli_mesin',
        'periksa_kondisi_level_oli_kompresor',
        'periksa_kondisi_level_air_battery',
        'periksa_kondisi_level_air_radiator',
        'periksa_kondisi_kebocoran_solar',
        'periksa_air_cleaner',
        'periksa_kabel_wiring_kendor',
        'cek_semua_instalasi',
        'pemeriksaan_setelah_mesin_hidup',
        'panaskan_mesin',
        'cek_semua_meteran_normal',
        'periksa_v_pulley',
        'periksa_suara_getaran_tidak_normal',
        'buang_sisa_air_pada_drain'

    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function ($model) {
            SendFormToGsiCorp::dispatch('p2h_compressor', $model->toArray());
        });
    }
}
