<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'book_name',
        'author_id',
        'publishing_house_id',
        'book_rating_id',
        'issue_number'
    ];

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function publishing_houses()
    {
        return $this->belongsTo(PublishingHouse::class, 'publishing_house_id');
    }

    public function book_ratings()
    {
        return $this->belongsTo(Bookrating::class, 'book_rating_id');
    }
}
