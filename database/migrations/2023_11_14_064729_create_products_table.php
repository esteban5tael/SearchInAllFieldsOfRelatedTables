<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Creating a new 'products' table
        Schema::create('products', function (Blueprint $table) {

            $table->id(); // Adding an auto-incrementing primary key 'id'

            $table->unsignedBigInteger('user_id'); // Adding a foreign key 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // Setting foreign key relationship to 'users' table with cascading updates and deletes

            $table->unsignedBigInteger('category_id'); // Adding a foreign key 'category_id'
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            // Setting foreign key relationship to 'categories' table with cascading updates and deletes

            $table->string('name', 50); // Adding a 'name' column limited to 50 characters
            $table->text('description')->nullable(); // Adding a 'description' column that can be nullable
            $table->float('price', 20, 2); // Adding a 'price' column for floating-point numbers with precision and scale

            $table->timestamps(); // Adding default 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping the 'products' table if it exists
        Schema::dropIfExists('products');
    }
};
