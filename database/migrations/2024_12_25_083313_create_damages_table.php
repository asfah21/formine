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
        Schema::create('damages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laptop_id')->constrained()->onDelete('cascade');
            $table->string('damage_type',45)->nullable();

            $table->string('keyboard', 25)->nullable();
            $table->string('touchpad', 25)->nullable();
            $table->string('layar', 25)->nullable();
            $table->string('port_usb', 25)->nullable();
            $table->string('antivirus', 25)->nullable();
            $table->string('os', 25)->nullable();
            $table->string('driver', 25)->nullable();
            $table->string('battery', 25)->nullable();
            $table->string('suhu', 25)->nullable();
            $table->string('audio', 25)->nullable();
            $table->string('koneksi_nirkabel', 25)->nullable();
            $table->string('antenna', 25)->nullable();
            $table->string('tombol_control', 25)->nullable();
            $table->string('toner_tinta', 25)->nullable();
            $table->string('kabel_daya', 25)->nullable();
            $table->string('mic_ptt', 25)->nullable();
            $table->string('camera', 25)->nullable();
            $table->string('storage', 25)->nullable();


            $table->timestamp('reported_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damages');
    }
};
