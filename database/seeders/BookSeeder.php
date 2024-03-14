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
        $b1->name = 'Trainspotting';
        $b1->author = 'Irvine Welsh';
        $b1->price = '€10';
        $b1->original_website = 'Depop';
        $b1->description = fake()->realText();
        $b1->rating = '9.2';
        $b1->cover = 'Paperback';
        $b1->condition = 'Excellent';
        $b1->timestamps;
        $b1->save();

        $b2 = New Book;
        $b2->name = 'Do Androids Dream of Electric Sheep';
        $b2->author = 'Philip K. Dick';
        $b2->price = '€6';
        $b2->original_website = 'eBay';
        $b2->description = fake()->realText();
        $b2->rating = '8.9';
        $b2->cover = 'Paperback';
        $b2->condition = 'Fair';
        $b2->timestamps;
        $b2->save();

        $b3 = New Book;
        $b3->name = 'The Secret History';
        $b3->author = 'Donna Tartt';
        $b3->price = '€15';
        $b3->original_website = 'Adverts.ie';
        $b3->description = fake()->realText();
        $b3->rating = '9.4';
        $b3->cover = 'Hardback';
        $b3->condition = 'Excellent';
        $b3->timestamps;
        $b3->save();

        $b4 = New Book;
        $b4->name = 'The Picture of Dorian Gray';
        $b4->author = 'Oscar Wilde';
        $b4->price = '€8';
        $b4->original_website = 'Facebook Marketplace';
        $b4->description = fake()->realText();
        $b4->rating = '8.9';
        $b4->cover = 'Paperback';
        $b4->condition = 'Fair';
        $b4->timestamps;
        $b4->save();

        $b5 = New Book;
        $b5->name = 'Go Ask Alice';
        $b5->author = 'Anonymous';
        $b5->price = '€9';
        $b5->original_website = 'Depop';
        $b5->description = fake()->realText();
        $b5->rating = '8.7';
        $b5->cover = 'Paperback';
        $b5->condition = 'Good';
        $b5->timestamps;
        $b5->save();

        $b6 = New Book;
        $b6->name = 'The Virgin Suicides';
        $b6->author = 'Jeffrey Eugenides';
        $b6->price = '€6';
        $b6->original_website = 'eBay';
        $b6->description = fake()->realText();
        $b6->rating = '1.9';
        $b6->cover = 'Paperback';
        $b6->condition = 'Fair';
        $b6->timestamps;
        $b6->save();

        $b7 = New Book;
        $b7->name = 'My Year of Rest and Relaxation';
        $b7->author = 'Ottessa Moshfegh';
        $b7->price = '€12';
        $b7->original_website = 'Adverts.ie';
        $b7->description = fake()->realText();
        $b7->rating = '7.4';
        $b7->cover = 'Hardback';
        $b7->condition = 'Excellent';
        $b7->timestamps;
        $b7->save();

        $b8 = New Book;
        $b8->name = 'The Metamorphosis';
        $b8->author = 'Franz Kafka';
        $b8->price = '€20';
        $b8->original_website = 'Facebook Marketplace';
        $b8->description = fake()->realText();
        $b8->rating = '9.9';
        $b8->cover = 'Hardback';
        $b8->condition = 'Fair';
        $b8->timestamps;
        $b8->save();

        $b9 = New Book;
        $b9->name = 'Normal People';
        $b9->author = 'Sally Rooney';
        $b9->price = '€10';
        $b9->original_website = 'Depop';
        $b9->description = fake()->realText();
        $b9->rating = '7.2';
        $b9->cover = 'Paperback';
        $b9->condition = 'Good';
        $b9->timestamps;
        $b9->save();

        $b10 = New Book;
        $b10->name = 'The Bell Jar';
        $b10->author = 'Sylvia Plath';
        $b10->price = '€8';
        $b10->original_website = 'eBay';
        $b10->description = fake()->realText();
        $b10->rating = '6.7';
        $b10->cover = 'Paperback';
        $b10->condition = 'Good';
        $b10->timestamps;
        $b10->save();

        $b11 = New Book;
        $b11->name = 'A Clockwork Orange';
        $b11->author = 'Anthony Burgess';
        $b11->price = '€8';
        $b11->original_website = 'Adverts.ie';
        $b11->description = fake()->realText();
        $b11->rating = '8.5';
        $b11->cover = 'Paperback';
        $b11->condition = 'Excellent';
        $b11->timestamps;
        $b11->save();

        $b12 = New Book;
        $b12->name = 'Porno';
        $b12->author = 'Irvine Welsh';
        $b12->price = '€12';
        $b12->original_website = 'Facebook Marketplace';
        $b12->description = fake()->realText();
        $b12->rating = '9.7';
        $b12->cover = 'Paperback';
        $b12->condition = 'Good';
        $b12->timestamps;
        $b12->save();

        $b13 = New Book;
        $b13->name = 'The Lives of Brian';
        $b13->author = 'Brian Johnson';
        $b13->price = '€20';
        $b13->original_website = 'Depop';
        $b13->description = fake()->realText();
        $b13->rating = '8.0';
        $b13->cover = 'Hardback';
        $b13->condition = 'Brand New';
        $b13->timestamps;
        $b13->save();

        $b14 = New Book;
        $b14->name = 'The Hunger Games';
        $b14->author = 'Suzanne Collins';
        $b14->price = '€9';
        $b14->original_website = 'eBay';
        $b14->description = fake()->realText();
        $b14->rating = '8.9';
        $b14->cover = 'Paperback';
        $b14->condition = 'Good';
        $b14->timestamps;
        $b14->save();

        $b15 = New Book;
        $b15->name = 'Net of Being';
        $b15->author = 'Alex Grey';
        $b15->price = '€15';
        $b15->original_website = 'Adverts.ie';
        $b15->description = fake()->realText();
        $b15->rating = '9.0';
        $b15->cover = 'Hardback';
        $b15->condition = 'Excellent';
        $b15->timestamps;
        $b15->save();

        $b16 = New Book;
        $b16->name = 'Dune';
        $b16->author = 'Frank Herbert';
        $b16->price = '€12';
        $b16->original_website = 'Facebook Marketplace';
        $b16->description = fake()->realText();
        $b16->rating = '9.1';
        $b16->cover = 'Paperback';
        $b16->condition = 'Brand New';
        $b16->timestamps;
        $b16->save();

        $b17 = New Book;
        $b17->name = 'The Big Fix: Hope After Heroin';
        $b17->author = 'Tracey Helton Mitchell';
        $b17->price = '€11';
        $b17->original_website = 'Depop';
        $b17->description = fake()->realText();
        $b17->rating = '8.2';
        $b17->cover = 'Paperback';
        $b17->condition = 'Excellent';
        $b17->timestamps;
        $b17->save();

        $b18 = New Book;
        $b18->name = 'Gory Details: Adventures from the Dark Side of Science';
        $b18->author = 'Erika Engelhaupt';
        $b18->price = '€18';
        $b18->original_website = 'eBay';
        $b18->description = fake()->realText();
        $b18->rating = '9.0';
        $b18->cover = 'Hardback';
        $b18->condition = 'Brand New';
        $b18->timestamps;
        $b18->save();

        $b19 = New Book;
        $b19->name = 'Dune: Messiah';
        $b19->author = 'Frank Herbert';
        $b19->price = '€10';
        $b19->original_website = 'Adverts.ie';
        $b19->description = fake()->realText();
        $b19->rating = '9.1';
        $b19->cover = 'Paperback';
        $b19->condition = 'Excellent';
        $b19->timestamps;
        $b19->save();

        $b20 = New Book;
        $b20->name = 'The Seven Husbands of Evelyn Hugo';
        $b20->author = 'Taylor Jenkins Reid';
        $b20->price = '€15';
        $b20->original_website = 'Facebook Marketplace';
        $b20->description = fake()->realText();
        $b20->rating = '8.4';
        $b20->cover = 'Paperback';
        $b20->condition = 'Excellent';
        $b20->timestamps;
        $b20->save();
    }
}