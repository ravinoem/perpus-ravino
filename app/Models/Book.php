<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $attributes = [
        $primarykey = 'id',
        'name' => '[]',
        'author_id' => '[]',
        'publisher_id' => '[]'
    ];
}

$freshBook = $book->fresh();
