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
        Schema::table('timesheets', function (Blueprint $table) {
            // First, drop the existing column
            $table->dropColumn('id_timesheet');
        });

        Schema::table('timesheets', function (Blueprint $table) {
            // Add it back as a string
            $table->uuid('id_timesheet')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timesheets', function (Blueprint $table) {
            $table->dropColumn('id_timesheet');
        });

        Schema::table('timesheets', function (Blueprint $table) {
            $table->unsignedBigInteger('id_timesheet')->nullable()->after('id');
        });
    }
};
