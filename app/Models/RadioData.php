<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RadioData extends Model // Ini adalah dummy db
{
    // Karena kita menggunakan query sub, nonaktifkan timestamps (jika tidak diperlukan)
    public $timestamps = false;

    // Isi nama table dengan nama apa pun, karena tidak akan dipakai secara langsung
    protected $table = 'radio_data';

    // Jika perlu, atur properti guarded atau fillable
    protected $guarded = [];
}
