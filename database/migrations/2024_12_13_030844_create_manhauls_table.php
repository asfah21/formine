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
        Schema::create('manhauls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('mh_id', 100);
            $table->string('nama_driver', 100);
            $table->string('departemen', 50);
            $table->string('pengawas')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('pesan')->nullable();
            $table->boolean('approve')->default(false);
            $table->string('status')->nullable();
            //Data-Awal
            $table->string('no_unit', 11)->nullable();
            $table->string('hm_next_service', 11 )->nullable();
            $table->string('start_hm', 11)->nullable();
            $table->string('finish_hm', 11)->nullable();
            $table->string('shift', 11)->nullable();
            //Kendaraan Berhenti
            $table->string('kaca_depan', 11)->nullable();
            $table->string('kaca_spion' , 11)->nullable();
            $table->string('wiper', 11)->nullable();

            $table->string('lampu_besar', 11)->nullable();
            $table->string('lampu_kecil', 11)->nullable();
            $table->string('lampu_sein', 11)->nullable();
            $table->string('lampu_mundur', 11)->nullable();
            $table->string('lampu_kabut', 11)->nullable();
            $table->string('kaca_jdl_pnpg', 11)->nullable();
            $table->string('tangga_pnpg', 11)->nullable();
            $table->string('tangki_angin', 11)->nullable();
            $table->string('baut_mur', 11)->nullable();
            $table->string('ban_kondisi', 11)->nullable();
            $table->string('per_baut_mur', 11)->nullable();
            $table->string('tali_kipas', 11)->nullable();
            $table->string('tangki_solar', 11)->nullable();
            $table->string('level_oli_mesin', 11)->nullable();
            $table->string('level_air_radiator', 11)->nullable();
            $table->string('level_oli_steering', 11)->nullable();
            $table->string('level_oli_trans', 11)->nullable();
            $table->string('fenders', 11)->nullable();
            $table->string('cat', 11)->nullable();
            $table->string('kap_mesin', 11)->nullable();

            $table->string('pemadam_api', 11)->nullable();
            $table->string('seat_belt', 11)->nullable();
            $table->string('radio', 11)->nullable();
            $table->string('ganjal_ban', 11)->nullable();
            $table->string('tricon', 11)->nullable();

            $table->string('kebersihan', 11)->nullable();

            $table->string('oli_mesin_tek', 11)->nullable();
            $table->string('air_pendingin', 11)->nullable();
            $table->string('angin_tekanan', 11)->nullable();
            $table->string('solar_isi_tangki', 11)->nullable();
            $table->string('klakson_angin', 11)->nullable();
            $table->string('klakson_listrik', 11)->nullable();
            $table->string('lampu_dim', 11)->nullable();
            $table->string('lampu_kecil2', 11)->nullable();
            $table->string('lampu_sen', 11)->nullable();
            $table->string('lampu_rem', 11)->nullable();
            $table->string('lampu_kabut2', 11)->nullable();
            $table->string('lampu_kabin', 11)->nullable();
            $table->string('lampu_pnpg', 11)->nullable();
            $table->string('tachometer', 11)->nullable();
            $table->string('hilo_switch', 11)->nullable();
            $table->string('pedal_gas', 11)->nullable();
            $table->string('seats', 11)->nullable();
            $table->string('fan', 11)->nullable();
            $table->string('bel_pnpg', 11)->nullable();
            $table->string('ac', 11)->nullable();
            $table->string('radio2', 11)->nullable();
            $table->string('monitor', 11)->nullable();
            $table->string('mic', 11)->nullable();
            $table->string('kabel_mic', 11)->nullable();

            $table->string('kebocoran_oli', 11)->nullable();
            $table->string('kebocoran_air', 11)->nullable();
            $table->string('kebocoran_udara', 11)->nullable();

            $table->string('suara_mesin', 11)->nullable();
            $table->string('suara_trans', 11)->nullable();
            $table->string('suara_diff', 11)->nullable();

            $table->string('stir_kemudi', 11)->nullable();
            $table->string('lampu_mundur2', 11)->nullable();
            $table->string('rem_kaki', 11)->nullable();
            $table->string('rem_parkir', 11)->nullable();
            $table->string('gigi_pers', 11)->nullable();
            $table->string('klakson_mundur', 11)->nullable();
            $table->string('lampu_peringatan', 11)->nullable();
            $table->string('ems_cms', 11)->nullable();
            $table->string('retarder', 11)->nullable();
            $table->string('strobe', 11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manhauls');
    }
};
