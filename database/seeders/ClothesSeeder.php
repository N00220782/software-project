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
        $c1->original_website = 'Depop';
        $c1->description = fake()->realText();
        $c1->size = 'M';
        $c1->brand = 'Bershka';
        $c1->color = 'Blue';
        $c1->condition = 'Brand New';
        $c1->image = 'bluecami.webp';
        $c1->timestamps;
        $c1->save();

        $c2 = New Clothes;
        $c2->name = 'Girls Dress';
        $c2->price = '€9';
        $c2->original_website = 'Facebook Marketplace';
        $c2->description = fake()->realText();
        $c2->size = '2-3 years';
        $c2->brand = 'Dunnes Stores';
        $c2->color = 'Pink';
        $c2->condition = 'Excellent';
        $c2->image = 'girls.webp';
        $c2->timestamps;
        $c2->save();

        $c3 = New Clothes;
        $c3->name = 'Tommy Hilfiger Shirt';
        $c3->price = '€24';
        $c3->original_website = 'Adverts.ie';
        $c3->description = fake()->realText();
        $c3->size = 'L';
        $c3->brand = 'Tommy Hilfiger';
        $c3->color = 'Grey';
        $c3->condition = 'Excellent';
        $c3->image = 'tommy.jpg';
        $c3->timestamps;
        $c3->save();

        $c4 = New Clothes;
        $c4->name = 'Brown Gap Hoodie';
        $c4->price = '€28';
        $c4->original_website = 'eBay';
        $c4->description = fake()->realText();
        $c4->size = 'L';
        $c4->brand = 'Gap';
        $c4->color = 'Brown';
        $c4->condition = 'Excellent';
        $c4->image = 'gap.webp';
        $c4->timestamps;
        $c4->save();

        $c5 = New Clothes;
        $c5->name = 'Nirvana Tee';
        $c5->price = '€12';
        $c5->original_website = 'Depop';
        $c5->description = fake()->realText();
        $c5->size = 'M';
        $c5->brand = 'H&M';
        $c5->color = 'Grey';
        $c5->condition = 'Good';
        $c5->image = 'nirvana.webp';
        $c5->timestamps;
        $c5->save();

        $c6 = New Clothes;
        $c6->name = 'Striped Tee';
        $c6->price = '€13';
        $c6->original_website = 'Facebook Marketplace';
        $c6->description = fake()->realText();
        $c6->size = 'S';
        $c6->brand = 'Unknown';
        $c6->color = 'Multi';
        $c6->condition = 'Excellent';
        $c6->image = 'stripe.webp';
        $c6->timestamps;
        $c6->save();

        $c7 = New Clothes;
        $c7->name = 'Vans Drill Chore Jacket';
        $c7->price = '€40';
        $c7->original_website = 'Depop';
        $c7->description = fake()->realText();
        $c7->size = 'L';
        $c7->brand = 'Vans';
        $c7->color = 'Multi';
        $c7->condition = 'Excellent';
        $c7->image = 'vans.webp';
        $c7->timestamps;
        $c7->save();

        $c8 = New Clothes;
        $c8->name = 'Blue Carhartt Beanie Hat';
        $c8->price = '€12';
        $c8->original_website = 'Adverts.ie';
        $c8->description = fake()->realText();
        $c8->size = 'One Size';
        $c8->brand = 'Carhartt';
        $c8->color = 'Blue';
        $c8->condition = 'Brand New';
        $c8->image = 'beanie.jpg';
        $c8->timestamps;
        $c8->save();

        $c9 = New Clothes;
        $c9->name = 'Nike Trousers';
        $c9->price = '€29';
        $c9->original_website = 'eBay';
        $c9->description = fake()->realText();
        $c9->size = 'XL';
        $c9->brand = 'Nike';
        $c9->color = 'Khaki';
        $c9->condition = 'Brand New';
        $c9->image = 'nike.webp';
        $c9->timestamps;
        $c9->save();

        $c10 = New Clothes;
        $c10->name = 'Champion Sweatpants';
        $c10->price = '€14';
        $c10->original_website = 'Facebook Marketplace';
        $c10->description = fake()->realText();
        $c10->size = 'S';
        $c10->brand = 'Champion';
        $c10->color = 'Grey';
        $c10->condition = 'Fair';
        $c10->image = 'champion.jpg';
        $c10->timestamps;
        $c10->save();

        $c11 = New Clothes;
        $c11->name = 'Black Hoodie';
        $c11->price = '€10';
        $c11->original_website = 'Depop';
        $c11->description = fake()->realText();
        $c11->size = 'M';
        $c11->brand = 'Shein';
        $c11->color = 'Black';
        $c11->condition = 'Good';
        $c11->image = 'black.jpg';
        $c11->timestamps;
        $c11->save();

        $c12 = New Clothes;
        $c12->name = 'Vintage Carhartt Hoodie';
        $c12->price = '€35';
        $c12->original_website = 'eBay';
        $c12->description = fake()->realText();
        $c12->size = 'XL';
        $c12->brand = 'Carhartt';
        $c12->color = 'Green';
        $c12->condition = 'Brand New';
        $c12->image = 'carhartt.webp';
        $c12->timestamps;
        $c12->save();
    }
}