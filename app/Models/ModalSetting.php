<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalSetting extends Model
{
    use HasFactory;

    protected $table = 'modal_settings'; //Arahkan ke tabel db langsung

    protected $fillable =[
        'message',
        'is_active',
    ];
}
