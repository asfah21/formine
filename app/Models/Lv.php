<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lv extends Model
{
    use HasFactory;

    protected $table = 'lvs'; //Arahkan ke tabel db langsung

    protected $fillable = [

        'lv_id',
        'nama_driver',
        'date',
        'time',
        'departemen',
        'pengawas',
        'no_unit',
        'shift',
        'start_hm',
        'status',
        'approve',
        'pesan',

        'LevelOlitrans',
        'AirRadiator',
        /*Start*/
        'LevelOlikemudi',
        'LevelOliengine',
        'LevelOlirem',
        'LevelOliperseneling',
        'BodyUnit',
        'BanBautroda',
        'KacaSpion',
        'AlarmMundur',
        'LampuRem',
        'LampuDepan',
        'LampuRotary',
        'AirWiper',
        'TiangBendera',
        'Kemudi',
        'RemTangan',
        'RemKaki',
        'Klakson',
        'PanelIndikator',
        'Wd',
        'Wipers',
        'RadioRig',
        'SeatBelt',
        'TempatDuduk',
        'Dongkrak',
        'GanjalRoda',
        'KabinKaca',
        'KunciBautroda',
        'Apar', /*End*/
    ];
}
