<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $primarykey = 'author_id';
    protected $attributes = [
        'name' => '[]',
        'address' => '[]'
    ];
}
