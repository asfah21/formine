<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('adt_id',50)->nullable();
            $table->string('nama_driver',50)->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('departemen',50)->nullable();
            $table->string('pengawas')->nullable();
            $table->string('status')->nullable();
            $table->boolean('approve')->default(false)->nullable(); // Tambahan Nullable
            $table->text('pesan')->nullable();
            $table->string('Shift',11)->nullable();
            $table->string('NomorUnit',11)->nullable();
            $table->string('HMNextService',11)->nullable();
            $table->string('StartHM',11)->nullable();
            $table->string('FinishHM',11)->nullable();

            $table->string('PassFuel',11)->nullable();
            $table->string('Tyre',11)->nullable();
            $table->string('FinelDrive',11)->nullable();
            $table->string('SelinderSteering',11)->nullable();
            $table->string('DriveShaft',11)->nullable();
            $table->string('DropBox',11)->nullable();
            $table->string('Pivot',11)->nullable();
            $table->string('CFrame',11)->nullable();
            $table->string('LevelOliHidraulic',11)->nullable();
            $table->string('LevelOliTransmisi',11)->nullable();
            $table->string('BatteryAki',11)->nullable();
            $table->string('SelinderDump',11)->nullable();
            $table->string('DumpBody',11)->nullable();
            $table->string('RubberSpring',11)->nullable();
            $table->string('PropellarShaft',11)->nullable();
            $table->string('AxelFront',11)->nullable();
            $table->string('AFrame',11)->nullable();
            $table->string('LevelOliBrake',11)->nullable();
            $table->string('Muffler',11)->nullable();
            $table->string('LevelOliEngine',11)->nullable();
            $table->string('LevelAirCoolant',11)->nullable();
            $table->string('VBelt',11)->nullable();
            $table->string('AirCleaner',11)->nullable();
            $table->string('WaterSeparator',11)->nullable();

            $table->string('Apar',11)->nullable();
            $table->string('FireSup',11)->nullable();
            $table->string('TaliPengaws',11)->nullable();
            $table->string('Radio',11)->nullable();
            $table->string('SafetyCone',11)->nullable();

            $table->string('KebersihanEquip',11)->nullable();

            $table->string('LevelOliMesin',11)->nullable();
            $table->string('LevelOliTransmisi2',11)->nullable();
            $table->string('LevelOliHydraulic',11)->nullable();
            $table->string('LevelOliRem',11)->nullable();
            $table->string('LevelFuel',11)->nullable();
            $table->string('OliTemp',11)->nullable();
            $table->string('TekananRemTractor',11)->nullable();
            $table->string('TekananRemTrailer',11)->nullable();
            $table->string('Kemudi',11)->nullable();
            $table->string('PangaturStir',11)->nullable();
            $table->string('PedalGas',11)->nullable();
            $table->string('PedalRemService',11)->nullable();
            $table->string('PedalRetarder',11)->nullable();
            $table->string('Difflock',11)->nullable();
            $table->string('TuasTransmisi',11)->nullable();
            $table->string('TuasLeverDump',11)->nullable();
            $table->string('RemParkir',11)->nullable();
            $table->string('LDB',11)->nullable();
            $table->string('ATC',11)->nullable();
            $table->string('LockTransmisi',11)->nullable();
            $table->string('EngineBrake',11)->nullable();
            $table->string('SeatBelt',11)->nullable();
            $table->string('LeverSingnal',11)->nullable();
            $table->string('Klakson',11)->nullable();

            $table->string('KebocoranOli',11)->nullable();
            $table->string('KebocoranAir',11)->nullable();
            $table->string('KebocoranUdara',11)->nullable();
            $table->string('KebocoranFuel',11)->nullable();

            $table->string('SuaraMasuk',11)->nullable();
            $table->string('SuaraTransmisi',11)->nullable();
            $table->string('SuaraDifferential',11)->nullable();

            $table->string('StirKemudi',11)->nullable();
            $table->string('Retarder',11)->nullable();
            $table->string('RemKaki',11)->nullable();
            $table->string('RemParkir2',11)->nullable();
            $table->string('GigiPerseneling',11)->nullable();
            $table->string('KlaksonMundur',11)->nullable();
            $table->string('LampuPeringatan',11)->nullable();
            $table->string('Ecu',11)->nullable();
            $table->string('SystemHidraulik',11)->nullable();
            $table->string('Gauge',11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adts');
    }
};
