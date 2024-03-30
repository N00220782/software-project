<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'author',
        'price',
        'original_website',
        'description',
        'rating',
        'cover',
        'condition',
        'image'
    ];

    public function wishlists(){
        return $this->belongsTo(Wishlist::class);
    }

    // public function toSearchableArray(): array
    // {
	//     // All model attributes are made searchable
    //     $array = $this->toArray();

	// 	// Then we add some additional fields
    //     $array['name'] = $this->book->name;
    //     $array['author'] = $this->book->author;

    //     return $array;
    // }

}