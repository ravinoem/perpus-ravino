<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $primarykey = 'publisher_id';
    protected $attributes = [
        'name' => '[]',
        'address' => '[]'
    ];
}
