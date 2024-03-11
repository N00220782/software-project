<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $b1 = New Book;
        $b1->name = 'Trainspotting ';
        $b1->author = 'Irvine Welsh ';
        $b1->price = '€16';
        $b1->original_website = 'Depop';
        $b1->description = fake()->realText();
        $b1->rating = 'M';
        $b1->cover = 'Paperback';
        $b1->condition = 'Brand New';
        $b1->timestamps;
        $b1->save();
    }
}