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
        Schema::create('dozers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('bd_id', 100);
            $table->string('nama_driver', 100);
            $table->string('departemen', 50);
            $table->string('pengawas')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('pesan')->nullable();
            $table->boolean('approve')->default(false)->nullable(); // Tambahan Nullable
            $table->string('status')->nullable();
            $table->string('no_unit', 11)->nullable();
            $table->string('hm_next_service', 11 )->nullable();
            $table->string('start_hm', 11)->nullable();
            $table->string('finish_hm', 11)->nullable();
            $table->string('shift', 11)->nullable();
            // Select
            $table->string('idler',11)->nullable();
            $table->string('kap_trunion',11)->nullable();
            $table->string('final_drive',11)->nullable();
            $table->string('segmen_sprocket',11)->nullable();
            $table->string('pemadam_api',11)->nullable();
            $table->string('lampu_mk_blk',11)->nullable();
            $table->string('track',11)->nullable();
            $table->string('roller_track',11)->nullable();
            $table->string('ripper',11)->nullable();
            $table->string('bettery',11)->nullable();
            $table->string('pivot_shaft',11)->nullable();
            $table->string('saringan_udara',11)->nullable();
            $table->string('silinder_tilt',11)->nullable();
            $table->string('silinder_lift',11)->nullable();
            $table->string('ruang_mesin',11)->nullable();
            $table->string('tangga_pggn',11)->nullable();
            $table->string('kabin_luar',11)->nullable();
            $table->string('kabin_opr',11)->nullable();
            $table->string('jendela_pintu',11)->nullable();
            $table->string('kipas_kaca',11)->nullable();
            $table->string('kaca_spion',11)->nullable();
            $table->string('handle_control',11)->nullable();
            $table->string('level_oli_mesin',11)->nullable();
            $table->string('level_oli_hidro',11)->nullable();
            $table->string('level_air_radiator',11)->nullable();

            $table->string('pemadam_api2',11)->nullable();
            $table->string('seat_belt',11)->nullable();
            $table->string('tricon',11)->nullable();

            $table->string('kebersihan',11)->nullable();

            $table->string('level_oli_mesin2',11)->nullable();
            $table->string('level_oli_trans',11)->nullable();
            $table->string('level_oli_pivot',11)->nullable();
            $table->string('level_oli_hidro2',11)->nullable();
            $table->string('seats',11)->nullable();
            $table->string('ac',11)->nullable();
            $table->string('tuas_control',11)->nullable();
            $table->string('trottle',11)->nullable();
            $table->string('pedal_dece',11)->nullable();
            $table->string('kemudi',11)->nullable();
            $table->string('tuas_trans',11)->nullable();
            $table->string('pedal_rem',11)->nullable();
            $table->string('tuas_rem',11)->nullable();
            $table->string('klakson',11)->nullable();
            $table->string('kabin_opr2',11)->nullable();
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
            $table->string('suara_transmisi',11)->nullable();

            $table->string('stir_kemudi',11)->nullable();
            $table->string('rem_kaki',11)->nullable();
            $table->string('gigi_pers',11)->nullable();
            $table->string('klakson_mdr',11)->nullable();
            $table->string('lampu_peringatan',11)->nullable();
            $table->string('ems_cms2',11)->nullable();
            $table->string('sistem_hidro',11)->nullable();
            $table->string('strobe',11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dozers');
    }
};
