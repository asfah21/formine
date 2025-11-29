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
        Schema::create('towerlamps', function (Blueprint $table) {
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
            $table->string('jack_tl', 11)->nullable();
            $table->string('baut_cover', 11)->nullable();
            $table->string('kelengkapan_tl', 11)->nullable();
            $table->string('sebelum_mesin_hidup', 11)->nullable();
            $table->string('jumlah_solar', 11)->nullable();
            $table->string('level_oli_mesin', 11)->nullable();
            $table->string('kebocoran_oli_mesin', 11)->nullable();
            $table->string('level_air_battery', 11)->nullable();
            $table->string('level_air_radiator', 11)->nullable();
            $table->string('kebocoran_solar', 11)->nullable();
            $table->string('kabel_wiring_kendor', 11)->nullable();
            $table->string('instalasi_kabel_power', 11)->nullable();
            $table->string('setelah_mesin_hidup', 11)->nullable();
            $table->string('panaskan_mesin', 11)->nullable();
            $table->string('meteran_normal', 11)->nullable();
            $table->string('selector_on', 11)->nullable();
            $table->string('suara_getaran_normal', 11)->nullable();
            $table->string('kondisi_switch', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towerlamps');
    }
};
