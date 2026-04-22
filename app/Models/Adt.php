<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\SendFormToGsiCorp;

class Adt extends Model
{
    use HasFactory;

    //protected $table = 'man_haul_forms'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'adt_id',
        'nama_driver',
        'date',
        'time',
        'departemen',
        'pengawas',
        'status',
        'approve',
        'pesan',
        'Shift',
        'NomorUnit',
        'HMNextService',
        'StartHM',
        'FinishHM',
        /* Start - Keliling atas bawah kendaraan */
        'PassFuel',
        'Tyre',
        'FinelDrive',
        'SelinderSteering',
        'DriveShaft',
        'DropBox',
        'Pivot',
        'CFrame',
        'LevelOliHidraulic',
        'LevelOliTransmisi',
        'BatteryAki',
        'SelinderDump',
        'DumpBody',
        'RubberSpring',
        'PropellarShaft',
        'AxelFront',
        'AFrame',
        'LevelOliBrake',
        'Muffler',
        'LevelOliEngine',
        'LevelAirCoolant',
        'VBelt',
        'AirCleaner',
        'WaterSeparator',
        /* Perkakas Peralatan*/
        'Apar',
        'FireSup',
        'TaliPengaws',
        'Radio',
        'SafetyCone',
        /*Kebersihan*/
        'KebersihanEquip',
        /*Dalam Kabin - Fungsi Meteran / Indikator Alarm*/
        'LevelOliMesin',
        'LevelOliTransmisi2',
        'LevelOliHydraulic',
        'LevelOliRem',
        'LevelFuel',
        'OliTemp',
        'TekananRemTractor',
        'TekananRemTrailer',
        'Kemudi',
        'PangaturStir',
        'PedalGas',
        'PedalRemService',
        'PedalRetarder',
        'Difflock',
        'TuasTransmisi',
        'TuasLeverDump',
        'RemParkir',
        'LDB',
        'ATC',
        'LockTransmisi',
        'EngineBrake',
        'SeatBelt',
        'LeverSingnal',
        'Klakson',
        /*Diluar kabin*/
        'KebocoranOli',
        'KebocoranAir',
        'KebocoranUdara',
        'KebocoranFuel',
        /*Kondisi Equip*/
        'SuaraMasuk',
        'SuaraTransmisi',
        'SuaraDifferential',
        /*Kendaraan Dijalankan*/
        'StirKemudi',
        'Retarder',
        'RemKaki',
        'RemParkir2',
        'GigiPerseneling',
        'KlaksonMundur',
        'LampuPeringatan',
        'Ecu',
        'SystemHidraulik',
        'Gauge',

    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::created(function ($model) {
            SendFormToGsiCorp::dispatch('p2h_adt', $model->toArray());
        });
    }
}
