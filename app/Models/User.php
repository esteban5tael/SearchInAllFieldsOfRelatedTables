<?php

namespace App\Models;

// Import necessary traits and classes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Define the User model class
class User extends Authenticatable
{
    // Use various traits to extend functionality
    use HasApiTokens, HasFactory, Notifiable;

    // Define the fillable attributes that can be mass-assigned
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Define attributes that should be hidden
    protected $hidden = [
        'password', // Hides the password attribute
        'remember_token', // Hides the remember_token attribute
    ];

    // Define the casting of certain attributes to specific data types
    protected $casts = [
        'email_verified_at' => 'datetime', // Casts email_verified_at as a datetime
        'password' => 'hashed', // Indicates password is hashed
    ];

    // Define the relationship between User and Category models
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    // Define the relationship between User and Product models
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
