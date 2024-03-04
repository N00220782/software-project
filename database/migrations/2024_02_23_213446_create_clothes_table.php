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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('size');
            $table->string('brand');
            $table->enum('color', ['Black', 'Grey', 'White', 'Brown', 'Tan', 'Cream', 'Yellow', 'Red', 'Burgundy', 'Orange', 'Pink', 'Purple', 'Blue', 'Navy', 'Green', 'Khaki', 'Silver', 'Gold', 'Multi']);
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
        Schema::dropIfExists('clothes');
    }
};
