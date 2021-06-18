<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reward extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orders() {
        return $this->hasMany(Order::class, 'reward_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
