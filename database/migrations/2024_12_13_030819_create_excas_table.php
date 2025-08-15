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
        Schema::create('excas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('ex_id', 100);
            $table->string('nama_driver', 100);
            $table->string('departemen', 50);
            $table->string('pengawas')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('pesan')->nullable();
            $table->boolean('approve')->default(false)->nullable(); // Tambahan Nullable
            $table->string('status')->nullable();
            //Data-Awal
            $table->string('no_unit', 11)->nullable();
            $table->string('hm_next_service', 11 )->nullable();
            $table->string('start_hm', 11)->nullable();
            $table->string('finish_hm', 11)->nullable();
            $table->string('shift', 11)->nullable();
            // Select
            $table->string('track',11)->nullable();
            $table->string('roller_track',11)->nullable();
            $table->string('idler',11)->nullable();
            $table->string('sprocket',11)->nullable();
            $table->string('motor_travel',11)->nullable();
            $table->string('tangga_pggn',11)->nullable();
            $table->string('lampu_mk_blk',11)->nullable();
            $table->string('selang_pipa',11)->nullable();
            $table->string('tangki_hidrolik',11)->nullable();
            $table->string('bucket',11)->nullable();
            $table->string('boom_bucket',11)->nullable();
            $table->string('stick_arm_bucket',11)->nullable();
            $table->string('battery',11)->nullable();
            $table->string('ruang_mesin',11)->nullable();
            $table->string('indikator_srg_udara',11)->nullable();
            $table->string('pemadam_api',11)->nullable();
            $table->string('kabin_opr',11)->nullable();
            $table->string('jendela_pintu',11)->nullable();
            $table->string('kipas_kaca',11)->nullable();
            $table->string('kaca_spion',11)->nullable();
            $table->string('ems_cms',11)->nullable();
            $table->string('handle_control',11)->nullable();
            $table->string('level_oli_mesin',11)->nullable();
            $table->string('level_oli_hidrolik',11)->nullable();
            $table->string('level_air_radiator',11)->nullable();

            $table->string('pemadam_api2',11)->nullable();
            $table->string('seat_belt',11)->nullable();
            $table->string('tricon',11)->nullable();

            $table->string('kebersihan',11)->nullable();

            $table->string('level_oli_mesin2',11)->nullable();
            $table->string('level_oli_hidrolik2',11)->nullable();
            $table->string('level_oli_swing',11)->nullable();
            $table->string('seats',11)->nullable();
            $table->string('ac',11)->nullable();
            $table->string('kemudi_stir',11)->nullable();
            $table->string('throttle',11)->nullable();
            $table->string('tuas_rem_parkir',11)->nullable();
            $table->string('tuas_kontrol',11)->nullable();
            $table->string('klakson',11)->nullable();
            $table->string('kabin_operator',11)->nullable();
            $table->string('lampu_mk_blk2',11)->nullable();
            $table->string('lampu_kabin',11)->nullable();
            $table->string('ems',11)->nullable();
            $table->string('switch_work_mode',11)->nullable();
            $table->string('switch_power_mode',11)->nullable();
            $table->string('switch_aec',11)->nullable();
            $table->string('radio',11)->nullable();
            $table->string('monitor',11)->nullable();
            $table->string('mic',11)->nullable();
            $table->string('kabel_mic',11)->nullable();

            $table->string('kebocoran_oli',11)->nullable();
            $table->string('kebocoran_air',11)->nullable();
            $table->string('suara_mesin',11)->nullable();
            $table->string('suara_trans',11)->nullable();

            $table->string('stir_kemudi',11)->nullable();
            $table->string('klakson_travel',11)->nullable();
            $table->string('ems_cms3',11)->nullable();
            $table->string('sistem_hidrolik',11)->nullable();
            $table->string('lampu_peringatan',11)->nullable();
            $table->string('strobe', 11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excas');
    }
};
