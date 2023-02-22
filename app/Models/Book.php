<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primarykey = 'book_id';
    protected $attributes = [
        'name' => '[]',
        'author' => '[]',
        'publisher' => '[]'
    ];
}

foreach (Book::all() as $book) {
    echo $book->name;
}

$freshBook = $book->fresh();
