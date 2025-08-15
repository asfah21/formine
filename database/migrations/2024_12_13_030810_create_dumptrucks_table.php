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
        Schema::create('dumptrucks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('dt_id', 100);
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
            $table->string('ban_muka_blk', 11)->nullable();
            $table->string('tangga_pggn',11)->nullable();
            $table->string('lampu_muka_blk',11)->nullable();
            $table->string('selang_pipa',11)->nullable();
            $table->string('tangki_hidrolik',11)->nullable();
            $table->string('tangki_udara',11)->nullable();
            $table->string('tabung_accu',11)->nullable();
            $table->string('hoist',11)->nullable();
            $table->string('silinder_hidrolik',11)->nullable();
            $table->string('pto',11)->nullable();
            $table->string('battery_aki',11)->nullable();
            $table->string('ruang_mesin',11)->nullable();
            $table->string('tali_kipas',11)->nullable();
            $table->string('saringan_udara',11)->nullable();
            $table->string('kabin_operator',11)->nullable();
            $table->string('wiper',11)->nullable();
            $table->string('spion',11)->nullable();
            $table->string('ems_cms',11)->nullable();
            $table->string('handle_kontrol',11)->nullable();
            $table->string('knalpot',11)->nullable();
            $table->string('klakson_mdr',11)->nullable();
            $table->string('lampu_ptr',11)->nullable();
            $table->string('pin_dump',11)->nullable();

            $table->string('pemadam_api',11)->nullable();
            $table->string('seat_belt',11)->nullable();
            $table->string('radio',11)->nullable();
            $table->string('ganjal_ban',11)->nullable();
            $table->string('tricon',11)->nullable();
            $table->string('kebersihan_equip',11)->nullable();

            $table->string('level_oli_mesin',11)->nullable();
            $table->string('level_oli_trans',11)->nullable();
            $table->string('level_oli_hidrolik',11)->nullable();
            $table->string('level_bahan_bakar',11)->nullable();
            $table->string('saringan_udara2',11)->nullable();
            $table->string('tekanan_udara',11)->nullable();
            $table->string('seat_tempat_ddk',11)->nullable();
            $table->string('gauge',11)->nullable();
            $table->string('kemudi_stir',11)->nullable();
            $table->string('pengatur_stir',11)->nullable();
            $table->string('pedal_rem',11)->nullable();
            $table->string('pedal_gas',11)->nullable();
            $table->string('retarder',11)->nullable();
            $table->string('tuas_gigi',11)->nullable();
            $table->string('gas_tangan',11)->nullable();
            $table->string('tuas_rem_parkir',11)->nullable();
            $table->string('klakson',11)->nullable();
            $table->string('lampu_muka_blk2',11)->nullable();
            $table->string('lampu_kabin',11)->nullable();
            $table->string('ems_cms_2',11)->nullable();
            $table->string('ac',11)->nullable();
            $table->string('radio2',11)->nullable();
            $table->string('monitor',11)->nullable();
            $table->string('mic',11)->nullable();
            $table->string('kabel_mic',11)->nullable();

            $table->string('kebocoran_oli',11)->nullable();
            $table->string('kebocoran_air',11)->nullable();
            $table->string('kebocoran_udara',11)->nullable();
            $table->string('batu_disela_roda',11)->nullable();

            $table->string('suara_mesin',11)->nullable();
            $table->string('suara_transmisi',11)->nullable();
            $table->string('suara_diff',11)->nullable();

            $table->string('stir_kemudi',11)->nullable();
            $table->string('retarder2',11)->nullable();
            $table->string('rem_kaki',11)->nullable();
            $table->string('rem_parkir',11)->nullable();
            $table->string('gigi_pers',11)->nullable();
            $table->string('klakson_mundur',11)->nullable();
            $table->string('lampu_peringatan',11)->nullable();
            $table->string('ems_cms3',11)->nullable();
            $table->string('sistem_hidrolik',11)->nullable();
            $table->string('gauge2', 11)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dumptrucks');
    }
};
