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
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('created_by') // Foreign key referencing users table
                  ->constrained('users', 'id') // Reference the 'id' column on the 'users' table
                  ->onDelete('cascade'); // Optional: delete blogs when the user is deleted
            $table->string('todo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
