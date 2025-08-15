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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sesi_absensi_id')->constrained('sesi_absensis')->onDelete('cascade');
            $table->string('name'); // Nama peserta
            $table->string('jabatan',55)->nullable();
            $table->integer('jam_tidur')->nullable();
            $table->string('sehat',10)->nullable();
            $table->string('pemateri',55)->nullable();

            $table->string('dept',35)->nullable(); // Nama peserta
            $table->string('photo')->nullable(); // Foto selfie peserta
            $table->string('ttd')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
