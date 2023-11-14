<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating a 'Products' category
        Category::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'name' => 'Products', // Setting the name of the category
            'description' => 'Items available for sale', // Adding a description for the category
        ]);

        // Creating a 'Services' category
        Category::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'name' => 'Services', // Setting the name of the category
            'description' => 'Provided services', // Adding a description for the category
        ]);

        // Creating an 'Others' category
        Category::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'name' => 'Others', // Setting the name of the category
            'description' => 'Miscellaneous items', // Adding a description for the category
        ]);
    }
}
