<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimesheetEntry extends Model
{
    protected $fillable = [
        'timesheet_id','activity_code_id','start_at','end_at','description','duration_minutes'
    ];

    public function code()
    {
        return $this->belongsTo(ActivityCode::class, 'activity_code_id');
    }
}