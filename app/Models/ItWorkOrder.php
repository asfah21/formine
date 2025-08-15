<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ItWorkOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number',
        'name',
        'tanggal',
        'jam',
        'department',
        'location',
        'request_type',
        'email',
        'telp',
        'priority',
        'description',
        'status',
        'resolved_by',
        'in_progress_at',
        'closed_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'in_progress_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($workOrder) {
            $lastTicket = self::whereRaw('ticket_number REGEXP "^[0-9]+$"')
                ->latest('id')
                ->first();

            $lastNumber = $lastTicket ? intval($lastTicket->ticket_number) : 250001;
            $newNumber = $lastNumber + 1;
            $workOrder->ticket_number = $newNumber;
        });

        // static::creating(function ($workOrder) {
        //     $lastTicket = self::latest()->first();
        //     $lastNumber = $lastTicket ? intval(substr($lastTicket->ticket_number, -4)) : 0;
        //     $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        //     $workOrder->ticket_number = date('y') . $newNumber;
        // });

        static::updating(function ($workOrder) {
            // Jika status berubah ke "in_progress" dan timestamp belum ada, set `in_progress_at`
            if ($workOrder->isDirty('status') && $workOrder->status === 'in_progress' && !$workOrder->in_progress_at) {
                $workOrder->in_progress_at = now();
            }

            // Jika status berubah ke "closed", set `closed_at` dan simpan user yang menyelesaikan
            if ($workOrder->isDirty('status') && $workOrder->status === 'closed' && !$workOrder->closed_at) {
                $workOrder->closed_at = now();
                $workOrder->resolved_by = Auth::user()->name ?? 'System'; // Ambil nama user atau "System"
            }
        });
    }

    // Hitung waktu Open → In Progress
    public function getOpenToInProgressAttribute()
    {
        return $this->in_progress_at ? $this->created_at->diffForHumans($this->in_progress_at, true) : '-';
    }

    // Hitung waktu In Progress → Closed
    public function getInProgressToClosedAttribute()
    {
        return ($this->closed_at && $this->in_progress_at)
            ? $this->in_progress_at->diffForHumans($this->closed_at, true)
            : '-';
    }

    // Total waktu dari Open → Closed
    public function getTotalDurationAttribute()
    {
        return $this->closed_at ? $this->created_at->diffForHumans($this->closed_at, true) : '-';
    }
}
