<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRating extends Model
{
    use HasFactory;
    protected $table = 'book_ratings';
    protected $fillable = [
        'book_rating_name',
        'book_rating_description',
    ];
}
