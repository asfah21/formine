<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onDelete('cascade'); // Barang yang diproses
            $table->enum('type', ['in', 'out']); // Barang masuk atau keluar
            $table->integer('quantity'); // Jumlah barang
            $table->foreignId('giver_id')->nullable()->constrained('users'); // Pemberi barang (opsional)
            $table->foreignId('receiver_id')->nullable()->constrained('users'); // Penerima barang (opsional)
            $table->foreignId('approver_id')->nullable()->constrained('users'); // Penyetuju barang (opsional)
            $table->date('date'); // Tanggal transaksi
            $table->text('purpose')->nullable(); // Peruntukan barang
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
