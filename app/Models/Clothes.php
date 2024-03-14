<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'original_website',
        'description',
        'size',
        'brand',
        'color',
        'condition',
        'image'
    ];

    public function wishlists(){
        return $this->belongsTo(Wishlist::class);
    }

}