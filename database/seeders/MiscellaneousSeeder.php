<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Miscellaneous;

class MiscellaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m1 = New Miscellaneous;
        $m1->name = 'Eevee Plushie';
        $m1->price = '€20';
        $m1->original_website = 'Facebook Marketplace';
        $m1->description = fake()->realText();
        $m1->condition = 'Excellent';
        $m1->image = 'eevee.webp';
        $m1->timestamps;
        $m1->save();

        $m2 = New Miscellaneous;
        $m2->name = 'Twilight DVD Set';
        $m2->price = '€10';
        $m2->original_website = 'Adverts.ie';
        $m2->description = fake()->realText();
        $m2->condition = 'Good';
        $m2->image = 'twilight.webp';
        $m2->timestamps;
        $m2->save();

        $m3 = New Miscellaneous;
        $m3->name = 'Oil Pastels';
        $m3->price = '€10';
        $m3->original_website = 'Depop';
        $m3->description = fake()->realText();
        $m3->condition = 'Brand New';
        $m3->image = 'oil.jpg';
        $m3->timestamps;
        $m3->save();

        $m4 = New Miscellaneous;
        $m4->name = 'Stainless Steel Travel Mug';
        $m4->price = '€15';
        $m4->original_website = 'eBay';
        $m4->description = fake()->realText();
        $m4->condition = 'Brand New';
        $m4->image = 'cup.jpg';
        $m4->timestamps;
        $m4->save();

        $m5 = New Miscellaneous;
        $m5->name = 'Yankee Candle Sun Warmed Meadows';
        $m5->price = '€20';
        $m5->original_website = 'Facebook Marketplace';
        $m5->description = fake()->realText();
        $m5->condition = 'Brand New';
        $m5->image = 'candle.webp';
        $m5->timestamps;
        $m5->save();

        $m6 = New Miscellaneous;
        $m6->name = 'Casetify Phone Case';
        $m6->price = '€14';
        $m6->original_website = 'Adverts.ie';
        $m6->description = fake()->realText();
        $m6->condition = 'Excellent';
        $m6->image = 'case.jpg';
        $m6->timestamps;
        $m6->save();

        $m7 = New Miscellaneous;
        $m7->name = 'Deftones White Pony Vinyl Record';
        $m7->price = '€20';
        $m7->original_website = 'Depop';
        $m7->description = fake()->realText();
        $m7->condition = 'Excellent';
        $m7->image = 'pony.jpg';
        $m7->timestamps;
        $m7->save();

        $m8 = New Miscellaneous;
        $m8->name = 'Cow Print Mug';
        $m8->price = '€8';
        $m8->original_website = 'eBay';
        $m8->description = fake()->realText();
        $m8->condition = 'Brand New';
        $m8->image = 'cow.jpg';
        $m8->timestamps;
        $m8->save();

        $m9 = New Miscellaneous;
        $m9->name = 'Patterend Tapestry';
        $m9->price = '€9';
        $m9->original_website = 'Facebook Marketplace';
        $m9->description = fake()->realText();
        $m9->condition = 'Excellent';
        $m9->image = 'wall.webp';
        $m9->timestamps;
        $m9->save();

        $m10 = New Miscellaneous;
        $m10->name = 'Cat Keychain';
        $m10->price = '€4';
        $m10->original_website = 'Adverts.ie';
        $m10->description = fake()->realText();
        $m10->condition = 'Excellent';
        $m10->image = 'cat.jpg';
        $m10->timestamps;
        $m10->save();

        $m11 = New Miscellaneous;
        $m11->name = 'Black Magic Moon Mug';
        $m11->price = '€10';
        $m11->original_website = 'Depop';
        $m11->description = fake()->realText();
        $m11->condition = 'Brand New';
        $m11->image = 'mug.jpg';
        $m11->timestamps;
        $m11->save();

        $m12 = New Miscellaneous;
        $m12->name = 'Lush Snow Fairy Candle';
        $m12->price = '€11';
        $m12->original_website = 'eBay';
        $m12->description = fake()->realText();
        $m12->condition = 'Brand New';
        $m12->image = 'lush.webp';
        $m12->timestamps;
        $m12->save();
    }
}