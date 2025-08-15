<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5M extends Model
{
    use HasFactory;

    protected $table = 'p5ms'; // Nama tabel di database

    protected $fillable = [
        'nama_karyawan',
        'jabatan',
        'tanggal',
        'jam',
        'pemateri',
        'departemen',
        'lokasi',
        'judul_materi',
        'agenda',
        'jam_tidur',
        'keterangan_sehat',
        'jumlah_hadir',
        'jumlah_karyawan',
        'foto', // Path gambar setelah upload
    ];
}
