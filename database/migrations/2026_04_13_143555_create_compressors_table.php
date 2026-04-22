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
        Schema::create('compressors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

             $table->string('tl_id', 100);
            $table->string('nama_driver', 100);
            $table->string('departemen', 50);
            $table->string('pengawas')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('pesan')->nullable();
            $table->boolean('approve')->default(false)->nullable();
            $table->string('status')->nullable();
            //Data-Awal
            $table->string('no_unit', 11)->nullable();
            $table->string('hm_next_service', 11 )->nullable();
            $table->string('start_hm', 11)->nullable();
            $table->string('finish_hm', 11)->nullable();
            $table->string('shift', 11)->nullable();

            // Checklist P2H
            $table->string('kebersian_mesin', 11)->nullable();
            $table->string('switch', 11)->nullable();
            $table->string('periksa_hose', 11)->nullable();
            $table->string('periksa_sebelum_mesin_hidup', 11)->nullable();
            $table->string('periksa_kondisi_level_solar', 11)->nullable();
            $table->string('periksa_kondisi_level_oli_mesin', 11)->nullable();
            $table->string('periksa_kondisi_kebocoran_oli_mesin', 11)->nullable();            
            $table->string('periksa_kondisi_level_oli_kompresor', 11)->nullable();
            $table->string('periksa_kondisi_level_air_battery', 11)->nullable();
            $table->string('periksa_kondisi_level_air_radiator', 11)->nullable();
            $table->string('periksa_kondisi_kebocoran_solar', 11)->nullable();
            $table->string('periksa_air_cleaner', 11)->nullable();
            $table->string('periksa_kabel_wiring_kendor', 11)->nullable();
            $table->string('cek_semua_instalasi', 11)->nullable();
            $table->string('pemeriksaan_setelah_mesin_hidup', 11)->nullable();
            $table->string('panaskan_mesin', 11)->nullable();
            $table->string('cek_semua_meteran_normal', 11)->nullable();
            $table->string('periksa_v_pulley', 11)->nullable();
            $table->string('periksa_suara_getaran_tidak_normal', 11)->nullable();
            $table->string('buang_sisa_air_pada_drain', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compressors');
    }
};
