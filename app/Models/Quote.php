<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'text',
        'author',
    ];

    public static function getRandomQuote()
    {
        return self::inRandomOrder()->first();
    }
}
