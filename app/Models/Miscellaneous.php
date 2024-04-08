<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Miscellaneous extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'price',
        'original_website',
        'description',
        'condition',
        'image'
    ];

    public function wishlists(){
        return $this->belongsTo(Wishlist::class);
    }

    public function toSearchableArray(): array
    {
	    // All model attributes are made searchable
        $array = $this->toArray();

		// Then we add some additional fields
        $array['name'] = $this->name;

        return $array;
    }

}