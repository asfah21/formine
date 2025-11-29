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
        Schema::create('activity_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique(); // contoh: HAUL, LDNG, TRVL, STBY
            $table->string('name');               // label mudah dibaca
            $table->string('category')->nullable(); // optional: OPERASI, IDLE, DOWNTIME
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_codes');
    }
};
