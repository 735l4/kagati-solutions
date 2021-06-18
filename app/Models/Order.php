<?php

namespace App\Models;

use App\Models\Reward;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function rewards() {
        return $this->belongsTo(Reward::class, 'reward_id');
    }
}
