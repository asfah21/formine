<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'sleep_time',
        'is_healthy',
        'date',
        'time',
        'location',
        'presenter',
        'presenter_department',
        'title',
        'photo',
        'notes'
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
