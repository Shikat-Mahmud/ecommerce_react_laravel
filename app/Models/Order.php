<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $fillable = ['user_id', 'status'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
