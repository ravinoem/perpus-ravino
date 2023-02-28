<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $attributes = [
        $primarykey = 'book_id',
        'name' => '[]',
        $foreignkey = 'author_id' => '[]',
        $foreignkey = 'publisher_id' => '[]'
    ];
}

$freshBook = $book->fresh();
