<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'specification',
        'stock',
        'satuan',
        'kondisi',
        'jenis'
    ];

    public function stockMovements()
    {
        return $this->hasMany(StockMovement::class);
    }
}
