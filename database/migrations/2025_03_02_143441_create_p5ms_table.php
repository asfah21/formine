<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('p5ms', function (Blueprint $table) {
            $table->id(); // ID auto-increment utama
            $table->string('nama_karyawan');
            $table->string('jabatan', 55);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('pemateri', 55);
            $table->string('departemen', 55)->nullable();
            $table->string('lokasi', 55)->nullable();
            $table->string('judul_materi', 100)->nullable();
            $table->string('agenda', 55)->nullable();
            $table->integer('jam_tidur'); // Hapus auto_increment
            $table->boolean('keterangan_sehat');
            $table->integer('jumlah_hadir')->nullable(); // Hapus auto_increment
            $table->integer('jumlah_karyawan')->nullable(); // Hapus auto_increment
            $table->string('foto')->nullable(); // Path gambar setelah upload
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('p5ms');
    }
};


