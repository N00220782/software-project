<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clothes;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c1 = New Clothes;
        $c1->name = 'Blue Womens Camisole';
        $c1->price = '€16';
        $b1->original_website = 'Depop';
        $c1->description = fake()->realText();
        $c1->size = 'M';
        $c1->brand = 'Bershka';
        $c1->color = 'Blue';
        $c1->condition = 'Brand New';
        $c1->timestamps;
        $c1->save();

        $c2 = New Clothes;
        $c2->name = 'Girls Dress';
        $c2->price = '€9';
        $b1->original_website = 'eBay';
        $c2->description = fake()->realText();
        $c2->size = '2-3 years';
        $c2->brand = 'Dunnes Stores';
        $c2->color = 'Pink';
        $c2->condition = 'Excellent';
        $c2->timestamps;
        $c2->save();

        $c3 = New Clothes;
        $c3->name = 'Tommy Hilfiger Shirt';
        $c3->price = '€24';
        $b1->original_website = 'eBay';
        $c3->description = fake()->realText();
        $c3->size = 'L';
        $c3->brand = 'Tommy Hilfiger';
        $c3->color = 'Grey';
        $c3->condition = 'Excellent';
        $c3->timestamps;
        $c3->save();
    }
}