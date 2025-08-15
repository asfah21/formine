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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained('sessions_attendance')->onDelete('cascade');
            $table->string('name',55);
            $table->string('position',55);
            $table->string('sleep_time',5)->nullable();
            $table->string('is_healthy',10)->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('location',55)->nullable();
            $table->string('presenter',55)->nullable();
            $table->string('presenter_department',55)->nullable();
            $table->string('title')->nullable();
            $table->string('photo');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('attendances');
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropForeign(['session_id']);
            $table->dropColumn('session_id');
        });
    }
};
