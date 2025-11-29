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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->enum('shift', ['siang', 'malam']);
            $table->string('nama');
            $table->string('nomor_unit');
            $table->unsignedInteger('hm_awal');
            $table->unsignedInteger('hm_akhir');
            $table->text('catatan')->nullable();
            // optional audit
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
