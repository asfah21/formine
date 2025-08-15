<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaptopMutation extends Model
{
    use HasFactory;

    protected $fillable = ['laptop_id', 'from_user_id', 'to_user_id', 'mutation_date'];

    public function laptop()
    {
        return $this->belongsTo(Laptop::class);
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
