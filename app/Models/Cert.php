<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    use HasFactory;

    protected $table = 'certs';

    protected $fillable = [
        'sesi_cert_id',
        'name',
        'jabatan',
        'nilai',
    ];

    public function sesi()
    {
        return $this->belongsTo(SesiCert::class, 'sesi_cert_id');
    }
}
