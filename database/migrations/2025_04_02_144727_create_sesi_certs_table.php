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
        Schema::create('sesi_certs', function (Blueprint $table) {
            $table->id();
            $table->string('agenda',55)->nullable();
            $table->string('judul',75)->nullable();
            $table->string('lokasi',25)->nullable();
            $table->string('instansi',55)->nullable();
            $table->string('durasi',55)->nullable();
            $table->date('mulai',55)->nullable();
            $table->date('berakhir',55)->nullable();

            $table->string('name');
            $table->string('unique_code')->unique();
            $table->integer('duration'); // Durasi sesi dalam jam
            $table->timestamp('start_time')->useCurrent(); // Waktu mulai sesi
            $table->timestamp('end_time')->nullable(); // Waktu sesi berakhir
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesi_certs');
    }
};
