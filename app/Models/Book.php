<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    const ATTR_TABLE = 'books';
    protected $table = self::ATTR_TABLE;
    // protected $attributes = [
    //     $primarykey = 'id',
    //     'name' => '[]',
    //     'author_id' => '[]',
    //     'publisher_id' => '[]'
    // ];
}

// $freshBook = $book->fresh();
