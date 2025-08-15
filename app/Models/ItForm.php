<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItForm extends Model
{
    use HasFactory;

    //protected $table = 'it_forms'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'name',
        'tanggal',
        'jam',
        'email',
        'nik',
        'telp',
        'jabatan',
        'departemen',
        'keterangan',
    ];
}
