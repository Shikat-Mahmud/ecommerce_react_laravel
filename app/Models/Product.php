<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'stock', 'price', 'discounted_price', 'image', 'status'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
