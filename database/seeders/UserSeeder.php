<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating an administrator user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(), // Setting email verification timestamp
            'password' => Hash::make('12345678'), // Hashing the password using bcrypt
            'created_at' => Carbon::now(), // Setting created timestamp
            'updated_at' => Carbon::now(), // Setting updated timestamp
        ]);

        // Creating a regular user
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'email_verified_at' => Carbon::now(), // Setting email verification timestamp
            'password' => Hash::make('12345678'), // Hashing the password using bcrypt
            'created_at' => Carbon::now(), // Setting created timestamp
            'updated_at' => Carbon::now(), // Setting updated timestamp
        ]);
    }
}
