<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscellaneous extends Model
{
    use HasFactory;

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

}