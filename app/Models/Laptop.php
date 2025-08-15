<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'laptops';

    protected $fillable =
    [
        'serial_number',
        'brand',
        'model',
        'user_id',
        'asset_id',
        'device_type',
        'arrival_date',
        'tgl_serah_terima',
        'spesifikasi',
        'ram',
        'os',
        'kondisi',
        'lokasi',
        'status',
        'remark'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maintenanceSchedules()
    {
        return $this->hasMany(MaintenanceSchedule::class);
    }

    public function damages()
    {
        return $this->hasMany(Damage::class);
    }

    public function laptopMutations()
    {
        return $this->hasMany(LaptopMutation::class);
    }
}
