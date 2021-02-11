<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'abv',
        'filepath',
        'description'
    ];
}
