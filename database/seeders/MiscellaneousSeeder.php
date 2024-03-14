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
        $m1->name = 'Pikachu Squishmallow';
        $m1->price = '€20';
        $m1->original_website = 'Facebook Marketplace';
        $m1->description = fake()->realText();
        $m1->condition = 'Excellent';
        $m1->timestamps;
        $m1->save();

        $m2 = New Miscellaneous;
        $m2->name = 'Twilight DVD Set';
        $m2->price = '€10';
        $m2->original_website = 'Adverts.ie';
        $m2->description = fake()->realText();
        $m2->condition = 'Good';
        $m2->timestamps;
        $m2->save();

        $m3 = New Miscellaneous;
        $m3->name = 'Oil Pastels';
        $m3->price = '€10';
        $m3->original_website = 'Depop';
        $m3->description = fake()->realText();
        $m3->condition = 'Brand New';
        $m3->timestamps;
        $m3->save();

        $m4 = New Miscellaneous;
        $m4->name = 'Stainless Steel Travel Mug';
        $m4->price = '€15';
        $m4->original_website = 'eBay';
        $m4->description = fake()->realText();
        $m4->condition = 'Brand New';
        $m4->timestamps;
        $m4->save();

        $m5 = New Miscellaneous;
        $m5->name = 'Yankee Candle Sun Warmed Meadows';
        $m5->price = '€20';
        $m5->original_website = 'Facebook Marketplace';
        $m5->description = fake()->realText();
        $m5->condition = 'Brand New';
        $m5->timestamps;
        $m5->save();

        $m6 = New Miscellaneous;
        $m6->name = 'Casetify Phone Case';
        $m6->price = '€14';
        $m6->original_website = 'Adverts.ie';
        $m6->description = fake()->realText();
        $m6->condition = 'Excellent';
        $m6->timestamps;
        $m6->save();

        $m7 = New Miscellaneous;
        $m7->name = 'Deftones White Pony Vinyl Record';
        $m7->price = '€20';
        $m7->original_website = 'Depop';
        $m7->description = fake()->realText();
        $m7->condition = 'Excellent';
        $m7->timestamps;
        $m7->save();

        $m8 = New Miscellaneous;
        $m8->name = 'Cow Print Mug';
        $m8->price = '€8';
        $m8->original_website = 'eBay';
        $m8->description = fake()->realText();
        $m8->condition = 'Brand New';
        $m8->timestamps;
        $m8->save();

        $m9 = New Miscellaneous;
        $m9->name = 'Patterend Tapestry';
        $m9->price = '€9';
        $m9->original_website = 'Facebook Marketplace';
        $m9->description = fake()->realText();
        $m9->condition = 'Excellent';
        $m9->timestamps;
        $m9->save();

        $m10 = New Miscellaneous;
        $m10->name = 'Cat Keychain';
        $m10->price = '€4';
        $m10->original_website = 'Adverts.ie';
        $m10->description = fake()->realText();
        $m10->condition = 'Excellent';
        $m10->timestamps;
        $m10->save();

        $m11 = New Miscellaneous;
        $m11->name = 'Black Magic Moon Mug';
        $m11->price = '€10';
        $m11->original_website = 'Depop';
        $m11->description = fake()->realText();
        $m11->condition = 'Brand New';
        $m11->timestamps;
        $m11->save();

        $m12 = New Miscellaneous;
        $m12->name = 'Lush Snow Fairy Candle';
        $m12->price = '€11';
        $m12->original_website = 'eBay';
        $m12->description = fake()->realText();
        $m12->condition = 'Brand New';
        $m12->timestamps;
        $m12->save();

        $m13 = New Miscellaneous;
        $m13->name = 'Rose Quartz Crystal';
        $m13->price = '€5';
        $m13->original_website = 'Facebook Marketplace';
        $m13->description = fake()->realText();
        $m13->condition = 'Excellent';
        $m13->timestamps;
        $m13->save();

        $m14 = New Miscellaneous;
        $m14->name = 'Stag Table Lamp';
        $m14->price = '€20';
        $m14->original_website = 'Adverts.ie';
        $m14->description = fake()->realText();
        $m14->condition = 'Excellent';
        $m14->timestamps;
        $m14->save();

        $m15 = New Miscellaneous;
        $m15->name = 'Set of Coasters';
        $m15->price = '€10';
        $m15->original_website = 'Depop';
        $m15->description = fake()->realText();
        $m15->condition = 'Brand New';
        $m15->timestamps;
        $m15->save();

        $m16 = New Miscellaneous;
        $m16->name = 'Dog Harness and Lead';
        $m16->price = '€15';
        $m16->original_website = 'eBay';
        $m16->description = fake()->realText();
        $m16->condition = 'Excellent';
        $m16->timestamps;
        $m16->save();
    }
}