<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Allow all attributes to be mass assignable
    protected $guarded = [];

    // Define relationship: a product belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship: a product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
