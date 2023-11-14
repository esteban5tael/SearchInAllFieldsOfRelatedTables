<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating products in different categories

        // Creating a product in the 'Products' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 1, // Assigning the category_id for 'Products'
            'name' => 'Laptops Hp', // Setting the name of the product
            'description' => 'High-quality HP laptops offering reliability, performance, and cutting-edge technology for diverse needs and preferences.', // Adding a description for the product
            'price' => 3000000, // Setting the price of the product
        ]);

        // Creating another product in the 'Products' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 1, // Assigning the category_id for 'Products'
            'name' => 'Pen Drives', // Setting the name of the product
            'description' => 'Portable USB storage devices ideal for transferring, storing, and accessing data conveniently and securely.', // Adding a description for the product
            'price' => 150000, // Setting the price of the product
        ]);

        // Creating a product in the 'Services' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 2, // Assigning the category_id for 'Services'
            'name' => 'Computers Maintenance', // Setting the name of the product
            'description' => 'Comprehensive computer maintenance services ensuring optimal performance, reliability, and longevity of hardware and software systems.', // Adding a description for the product
            'price' => 600000, // Setting the price of the product
        ]);

        // Creating another product in the 'Services' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 2, // Assigning the category_id for 'Services'
            'name' => 'Software Installation', // Setting the name of the product
            'description' => 'Professional installation services for software applications, ensuring seamless integration and functionality across various platforms.', // Adding a description for the product
            'price' => 20000, // Setting the price of the product
        ]);

        // Creating a product in the 'Others' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 3, // Assigning the category_id for 'Others'
            'name' => 'Accessories', // Setting the name of the product
            'description' => 'Various add-ons and supplementary items designed to enhance functionality and complement electronic devices or equipment.', // Adding a description for the product
            'price' => 10000, // Setting the price of the product
        ]);

        // Creating another product in the 'Others' category
        Product::create([
            'user_id' => rand(1, 2), // Assigning a random user_id between 1 and 2
            'category_id' => 3, // Assigning the category_id for 'Others'
            'name' => 'Laravel Apps Development', // Setting the name of the product
            'description' => 'Proficient creation of customized applications leveraging Laravel framework, ensuring scalable, secure, and efficient solutions tailored to specific business needs.', // Adding a description for the product
            'price' => 500000, // Setting the price of the product
        ]);
    }
}
