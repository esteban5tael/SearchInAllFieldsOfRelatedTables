<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Prompts\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Creating a new 'categories' table
        Schema::create('categories', function (Blueprint $table) {

            $table->id(); // Adding an auto-incrementing primary key 'id'

            $table->unsignedBigInteger('user_id'); // Adding a foreign key 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // Setting foreign key relationship to 'users' table with cascading updates and deletes

            $table->string('name', 50); // Adding a 'name' column limited to 50 characters
            $table->text('description')->nullable(); // Adding a 'description' column that can be nullable

            $table->timestamps(); // Adding default 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping the 'categories' table if it exists
        Schema::dropIfExists('categories');
    }
};
