<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishingHouse extends Model
{
    use HasFactory;


    protected $table = 'publishing_houses';

    protected $fillable = [
        'publishing_house_name',
        'publishing_house_address',
    ];
}
