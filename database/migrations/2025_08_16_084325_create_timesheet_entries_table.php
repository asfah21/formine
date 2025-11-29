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
        Schema::create('timesheet_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('timesheet_id')->constrained()->cascadeOnDelete();
            $table->foreignId('activity_code_id')->constrained('activity_codes');
            $table->dateTime('start_at'); // disimpan sebagai datetime lokal (GMT+8) berdasar tanggal + shift
            $table->dateTime('end_at');   // mencakup lintas hari utk shift malam
            $table->text('description')->nullable();
            $table->unsignedInteger('duration_minutes'); // durasi dihitung di server
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheet_entries');
    }
};
