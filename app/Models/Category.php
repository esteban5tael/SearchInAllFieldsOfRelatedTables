<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Allow all attributes to be mass assignable
    protected $guarded = [];

    // Define relationship: a category belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship: a category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
