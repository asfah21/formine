<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $table = 'sessions_attendance'; //Arahkan ke tabel db langsung

    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'is_active'
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}


