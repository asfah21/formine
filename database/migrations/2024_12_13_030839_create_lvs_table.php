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
        Schema::create('lvs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('lv_id',70)->nullable();
            $table->string('nama_driver',70)->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('departemen',50)->nullable();
            $table->string('pengawas')->nullable();
            $table->string('no_unit',11)->nullable();
            $table->string('shift',11)->nullable();
            $table->string('start_hm',11)->nullable();
            $table->string('status')->nullable();
            $table->boolean('approve')->default(false)->nullable();
            $table->text('pesan',11)->nullable();

            //Start
            $table->string('LevelOlitrans',11)->nullable();
            $table->string('AirRadiator',11)->nullable();
            $table->string('LevelOlikemudi',11)->nullable();
            $table->string('LevelOliengine',11)->nullable();
            $table->string('LevelOlirem',11)->nullable();
            $table->string('LevelOliperseneling',11)->nullable();
            $table->string('BodyUnit',11)->nullable();
            $table->string('BanBautroda',11)->nullable();
            $table->string('KacaSpion',11)->nullable();
            $table->string('AlarmMundur',11)->nullable();
            $table->string('LampuRem',11)->nullable();
            $table->string('LampuDepan',11)->nullable();
            $table->string('LampuRotary',11)->nullable();
            $table->string('AirWiper',11)->nullable();
            $table->string('TiangBendera',11)->nullable();
            $table->string('Kemudi',11)->nullable();
            $table->string('RemTangan',11)->nullable();
            $table->string('RemKaki',11)->nullable();
            $table->string('Klakson',11)->nullable();
            $table->string('PanelIndikator',11)->nullable();
            $table->string('Wd',11)->nullable();
            $table->string('Wipers',11)->nullable();
            $table->string('RadioRig',11)->nullable();
            $table->string('SeatBelt',11)->nullable();
            $table->string('TempatDuduk',11)->nullable();
            $table->string('Dongkrak',11)->nullable();
            $table->string('GanjalRoda',11)->nullable();
            $table->string('KabinKaca',11)->nullable();
            $table->string('KunciBautroda',11)->nullable();
            $table->string('Apar',11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lvs');
    }
};
