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
        Schema::create('compactors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('cp_id', 100);
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
            //Data Isi
            $table->string('ban_blk',11)->nullable();
            $table->string('drum',11)->nullable();
            $table->string('tangga',11)->nullable();
            $table->string('lampu_mk_blk',11)->nullable();
            $table->string('selang_pipa_hidro',11)->nullable();
            $table->string('tangki_hidro',11)->nullable();
            $table->string('battery_aki',11)->nullable();
            $table->string('ruang_mesin',11)->nullable();
            $table->string('saringan_udara',11)->nullable();
            $table->string('kabin_opr',11)->nullable();
            $table->string('jendela_pintu',11)->nullable();
            $table->string('wiper',11)->nullable();
            $table->string('kaca_spion',11)->nullable();
            $table->string('handle_control',11)->nullable();
            $table->string('level_oli_mesin',11)->nullable();
            $table->string('level_oli_hidro',11)->nullable();
            $table->string('level_air_radiator',11)->nullable();

            $table->string('pemadam_api',11)->nullable();
            $table->string('seat_belt',11)->nullable();
            $table->string('tricon',11)->nullable();

            $table->string('kebersihan',11)->nullable();

            $table->string('level_oli_mesin2',11)->nullable();
            $table->string('level_oli_trans',11)->nullable();
            $table->string('level_oli_hidro2',11)->nullable();
            $table->string('level_bahan_bakar',11)->nullable();
            $table->string('seats',11)->nullable();
            $table->string('ac',11)->nullable();
            $table->string('kemudi_stir',11)->nullable();
            $table->string('pedal_rem',11)->nullable();
            $table->string('pedal_gas',11)->nullable();
            $table->string('gas_tangan',11)->nullable();
            $table->string('tuas_gigi_trans',11)->nullable();
            $table->string('tuas_maju_mdr',11)->nullable();
            $table->string('tuas_rem_parkir',11)->nullable();
            $table->string('klakson',11)->nullable();
            $table->string('lampu_mk_blk2',11)->nullable();
            $table->string('lampu_kabin',11)->nullable();
            $table->string('ems_cms',11)->nullable();
            $table->string('gauge',11)->nullable();
            $table->string('radio',11)->nullable();
            $table->string('monitor',11)->nullable();
            $table->string('mic',11)->nullable();
            $table->string('kabel_mic',11)->nullable();

            $table->string('kebocoran_oli',11)->nullable();
            $table->string('kebocoran_air',11)->nullable();

            $table->string('suara_mesin',11)->nullable();
            $table->string('suara_trans',11)->nullable();

            $table->string('stir_kemudi2',11)->nullable();
            $table->string('rem_kaki',11)->nullable();
            $table->string('rem_parkir',11)->nullable();
            $table->string('gigi_pers',11)->nullable();
            $table->string('klakson_mdr',11)->nullable();
            $table->string('lampu_peringatan',11)->nullable();
            $table->string('ems_cms2',11)->nullable();
            $table->string('sistem_hidro',11)->nullable();
            $table->string('gauge2',11)->nullable();
            $table->string('strobe',11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compactors');
    }
};
