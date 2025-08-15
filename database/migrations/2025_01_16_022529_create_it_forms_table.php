<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('it_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('email');
            $table->string('nik');
            $table->string('telp');
            $table->string('jabatan');
            $table->string('departemen');
            $table->text('keterangan');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('it_forms');
    }
};
