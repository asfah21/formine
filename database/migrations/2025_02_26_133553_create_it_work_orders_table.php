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
        Schema::create('it_work_orders', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number')->unique();
            $table->string('name',100);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('department',55);
            $table->string('location',55);
            $table->string('request_type',55);
            $table->string('email',55)->nullable();
            $table->string('telp',55)->nullable();
            $table->string('priority',55)->nullable();
            $table->text('description');
            $table->enum('status', ['open', 'in_progress', 'closed'])->default('open');
            $table->string('resolved_by',100)->nullable();
            $table->timestamp('in_progress_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('it_work_orders');
    }
};
