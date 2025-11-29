<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Timesheet extends Model
{
    protected $fillable = [
        'id_timesheet', 'tanggal', 'shift', 'nama', 'nomor_unit', 'hm_awal', 'hm_akhir',
        'total_work_minutes', 'operational_minutes', 'catatan', 'created_by', 'approve_by',
        'signature_data'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_timesheet)) {
                $model->id_timesheet = (string) Str::uuid();
            }
        });
    }

    public function entries()
    {
        return $this->hasMany(TimesheetEntry::class);
    }
}