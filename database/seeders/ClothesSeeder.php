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
        $c6->timestamps;
        $c6->save();

        $c7 = New Clothes;
        $c7->name = 'Blue Womens Camisole';
        $c7->price = '€16';
        $c7->original_website = 'Depop';
        $c7->description = fake()->realText();
        $c7->size = 'M';
        $c7->brand = 'Bershka';
        $c7->color = 'Blue';
        $c7->condition = 'Brand New';
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
        $c8->condition = 'Excellent';
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
        $c12->timestamps;
        $c12->save();

        $c13 = New Clothes;
        $c13->name = 'Childish Hoodie';
        $c13->price = '€60';
        $c13->original_website = 'Depop';
        $c13->description = fake()->realText();
        $c13->size = 'L';
        $c13->brand = 'Childish';
        $c13->color = 'Purple';
        $c13->condition = 'Brand New';
        $c13->timestamps;
        $c13->save();

        $c14 = New Clothes;
        $c14->name = 'Supreme Raincoat';
        $c14->price = '€100';
        $c14->original_website = 'eBay';
        $c14->description = fake()->realText();
        $c14->size = 'XXL';
        $c14->brand = 'Supreme';
        $c14->color = 'Red';
        $c14->condition = 'Excellent';
        $c14->timestamps;
        $c14->save();

        $c15 = New Clothes;
        $c15->name = 'Iron Man T-Shirt';
        $c15->price = '€10';
        $c15->original_website = 'Adverts.ie';
        $c15->description = fake()->realText();
        $c15->size = 'L';
        $c15->brand = 'Marvel';
        $c15->color = 'Blue';
        $c15->condition = 'Good';
        $c15->timestamps;
        $c15->save();

        $c16 = New Clothes;
        $c16->name = 'LCD Soundsystem Tee';
        $c16->price = '€22';
        $c16->original_website = 'Facebook Marketplace';
        $c16->description = fake()->realText();
        $c16->size = 'M';
        $c16->brand = 'Gildan';
        $c16->color = 'White';
        $c16->condition = 'Excellent';
        $c16->timestamps;
        $c16->save();

        $c17 = New Clothes;
        $c17->name = 'Ellesse T-Shirt';
        $c17->price = '€18';
        $c17->original_website = 'Facebook Marketplace';
        $c17->description = fake()->realText();
        $c17->size = 'XS';
        $c17->brand = 'Ellesse';
        $c17->color = 'Multi';
        $c17->condition = 'Excellent';
        $c17->timestamps;
        $c17->save();

        $c18 = New Clothes;
        $c18->name = 'Cannibal Corpse Tee';
        $c18->price = '€20';
        $c18->original_website = 'Depop';
        $c18->description = fake()->realText();
        $c18->size = 'XL';
        $c18->brand = 'Gildan';
        $c18->color = 'Black';
        $c18->condition = 'Excellent';
        $c18->timestamps;
        $c18->save();

        $c19 = New Clothes;
        $c19->name = 'Dickies Skater Trousers';
        $c19->price = '€25';
        $c19->original_website = 'Facebook Marketplace';
        $c19->description = fake()->realText();
        $c19->size = '36"';
        $c19->brand = 'Dickies';
        $c19->color = 'Navy';
        $c19->condition = 'Excellent';
        $c19->timestamps;
        $c19->save();

        $c20 = New Clothes;
        $c20->name = 'Black Striped Adidas Top';
        $c20->price = '€18';
        $c20->original_website = 'Facebook Marketplace';
        $c20->description = fake()->realText();
        $c20->size = 'XS';
        $c20->brand = 'Adidas';
        $c20->color = 'Multi';
        $c20->condition = 'Excellent';
        $c20->timestamps;
        $c20->save();

        $c21 = New Clothes;
        $c21->name = 'Nike Sweatpants';
        $c21->price = '€20';
        $c21->original_website = 'Facebook Marketplace';
        $c21->description = fake()->realText();
        $c21->size = 'L';
        $c21->brand = 'Nike';
        $c21->color = 'Pink';
        $c21->condition = 'Good';
        $c21->timestamps;
        $c21->save();

        $c22 = New Clothes;
        $c22->name = 'Navy Dickies Workwear Shirt';
        $c22->price = '€20';
        $c22->original_website = 'Depop';
        $c22->description = fake()->realText();
        $c22->size = 'M';
        $c22->brand = 'Dickies';
        $c22->color = 'White';
        $c22->condition = 'Excellent';
        $c22->timestamps;
        $c22->save();

        $c23 = New Clothes;
        $c23->name = 'Stradivarius Green Jumper';
        $c23->price = '€20';
        $c23->original_website = 'Depop';
        $c23->description = fake()->realText();
        $c23->size = 'S';
        $c23->brand = 'Stradivarius';
        $c23->color = 'Green';
        $c23->condition = 'Brand New';
        $c23->timestamps;
        $c23->save();

        $c24 = New Clothes;
        $c24->name = 'Victorias Secret Sweatshirt';
        $c24->price = '€15';
        $c24->original_website = 'Depop';
        $c24->description = fake()->realText();
        $c24->size = 'XS';
        $c24->brand = 'Victorias Secret';
        $c24->color = 'Black';
        $c24->condition = 'Good';
        $c24->timestamps;
        $c24->save();

        $c25 = New Clothes;
        $c25->name = 'Dickies Double Knee Trousers';
        $c25->price = '€29';
        $c25->original_website = 'eBay';
        $c25->description = fake()->realText();
        $c25->size = '32"';
        $c25->brand = 'Dickies';
        $c25->color = 'Khaki';
        $c25->condition = 'Excellent';
        $c25->timestamps;
        $c25->save();

        $c26 = New Clothes;
        $c26->name = 'Adidas Hoodie';
        $c26->price = '€32';
        $c26->original_website = 'eBay';
        $c26->description = fake()->realText();
        $c26->size = 'XL';
        $c26->brand = 'Adidas';
        $c26->color = 'Brown';
        $c26->condition = 'Brand New';
        $c26->timestamps;
        $c26->save();

        $c27 = New Clothes;
        $c27->name = 'Nike Sweatshirt';
        $c27->price = '€28';
        $c27->original_website = 'eBay';
        $c27->description = fake()->realText();
        $c27->size = 'XL';
        $c27->brand = 'Nike';
        $c27->color = 'Black';
        $c27->condition = 'Excellent';
        $c27->timestamps;
        $c27->save();

        $c28 = New Clothes;
        $c28->name = 'Adidas Gazelles';
        $c28->price = '€40';
        $c28->original_website = 'Adverts.ie';
        $c28->description = fake()->realText();
        $c28->size = 'UK 8';
        $c28->brand = 'Adidas';
        $c28->color = 'Multi';
        $c28->condition = 'Excellent';
        $c28->timestamps;
        $c28->save();

        $c29 = New Clothes;
        $c29->name = 'Shacket';
        $c29->price = '€15';
        $c29->original_website = 'Adverts.ie';
        $c29->description = fake()->realText();
        $c29->size = 'M';
        $c29->brand = 'Bershka';
        $c29->color = 'Multi';
        $c29->condition = 'Good';
        $c29->timestamps;
        $c29->save();

        $c30 = New Clothes;
        $c30->name = 'White Cowboy Boots';
        $c30->price = '€20';
        $c30->original_website = 'Adverts.ie';
        $c30->description = fake()->realText();
        $c30->size = 'UK 5';
        $c30->brand = 'H&M';
        $c30->color = 'White';
        $c30->condition = 'Excellent';
        $c30->timestamps;
        $c30->save();
    }
}