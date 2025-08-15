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
        Schema::create('form_serah_terimas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('fst_id', 100);
            $table->string('id_assets',25);
            $table->string('nama_form',55)->nullable();
            $table->string('nama_pemberi', 100)->nullable();
            $table->string('nama_penerima', 100)->nullable();
            $table->string('nama_mengetahui', 100)->nullable();
            $table->string('jabatan_pemberi', 50)->nullable();
            $table->string('jabatan_penerima', 50)->nullable();
            $table->string('jabatan_mengetahui', 50)->nullable();
            $table->string('lokasi')->nullable();

            $table->string('detail_perangkat',70)->nullable();
            $table->string('kondisi_perangkat',70)->nullable();
            $table->date('tgl_penyerahan')->nullable();
            $table->time('time')->nullable();

            $table->string('kondisi_fisik',50)->nullable();
            $table->string('kondisi_fisik_ket',150)->nullable();
            $table->string('komponen_lengkap',50)->nullable();
            $table->string('komponen_lengkap_ket',150)->nullable();
            $table->string('fungsi_dasar',50)->nullable();
            $table->string('fungsi_dasar_ket',150)->nullable();
            $table->string('sesuai_spek',50)->nullable();
            $table->string('sesuai_spek_ket',150)->nullable();
            $table->string('kartu_garansi',50)->nullable();
            $table->string('kartu_garansi_ket',150)->nullable();
            $table->string('lisensi_asli',50)->nullable();
            $table->string('lisensi_asli_ket',150)->nullable();
            $table->string('kode_akt',50)->nullable();
            $table->string('kode_akt_ket',150)->nullable();
            $table->string('dok_lengkap',50)->nullable();
            $table->string('dok_lengkap_ket',150)->nullable();
            $table->string('versi_terbaru',50)->nullable();
            $table->string('versi_terbaru_ket',150)->nullable();
            $table->string('kompatibel',50)->nullable();
            $table->string('kompatibel_ket',150)->nullable();

            $table->string('software_terinstall', 200)->nullable();
            $table->string('jumlah', 10)->nullable();
            $table->text('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_serah_terimas');
    }
};
