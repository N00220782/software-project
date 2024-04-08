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
        $b1->image = 'train.jpg';
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
        $b2->image = 'sheep.jpg';
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
        $b3->image = 'secret.jpg';
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
        $b4->image = 'dorian.jpg';
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
        $b5->image = 'alice.jpg';
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
        $b6->image = 'suicide.webp';
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
        $b7->image = 'year.jpg';
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
        $b8->image = 'bug.jpg';
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
        $b9->image = 'normal.jpg';
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
        $b10->image = 'bell.jpg';
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
        $b11->image = 'orange.jpg';
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
        $b12->image = 'porno.jpg';
        $b12->timestamps;
        $b12->save();
    }
}