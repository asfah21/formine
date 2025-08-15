<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'type',
        'quantity',
        'giver_id',
        'receiver_id',
        'approver_id',
        'date',
        'purpose'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function giver()
    {
        return $this->belongsTo(User::class, 'giver_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }

}
