<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'clothes_id',
        'book_id',
        'miscellaneous_id'
    ];

    public function clothes() {
        return $this->hasMany(Clothes::class);
    }

    public function books() {
        return $this->hasMany(Books::class);
    }

    public function miscellaneouses() {
        return $this->hasMany(Miscellaneous::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}