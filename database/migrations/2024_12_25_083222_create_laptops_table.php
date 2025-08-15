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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number')->nullable();
            $table->string('brand');
            $table->string('model')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('asset_id')->uniqid();
            $table->string('device_type',55)->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('tgl_serah_terima')->nullable();
            $table->string('spesifikasi',155)->nullable();
            $table->string('ram',25)->nullable();
            $table->string('os',55)->nullable();
            $table->string('kondisi',55)->nullable();
            $table->string('lokasi',55)->nullable();
            $table->string('status',55)->nullable();
            $table->text('remark')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
