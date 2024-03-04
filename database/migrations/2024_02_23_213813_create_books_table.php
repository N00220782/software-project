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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('rating');
            $table->enum('cover', ['Hardback', 'Paperback']);
            $table->enum('condition', ['Brand New', 'Excellent', 'Good', 'Fair']);
            $table->string('image')->default('product.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
