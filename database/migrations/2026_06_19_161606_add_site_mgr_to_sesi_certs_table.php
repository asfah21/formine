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
        Schema::table('sesi_certs', function (Blueprint $table) {
            // Menambahkan kolom site_mgr tepat setelah kolom end_time
            $table->string('site_mgr')->nullable()->after('end_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sesi_certs', function (Blueprint $table) {
            // Antisipasi jika migration di-rollback (ketik: php artisan migrate:rollback)
            $table->dropColumn('site_mgr');
        });
    }
};
