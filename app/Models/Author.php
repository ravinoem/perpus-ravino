<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $attributes = [
        $primarykey = 'author_id',
        'name' => '[]',
        'address' => '[]'
    ];
}
