<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name',55);
            $table->string('description',200)->nullable();
            $table->string('specification',55)->nullable();
            $table->integer('stock')->default(0);
            $table->string('satuan',55)->nullable();
            $table->string('kondisi',55)->nullable();
            $table->string('jenis',25)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
