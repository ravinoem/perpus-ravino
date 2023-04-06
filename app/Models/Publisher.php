<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;
    const ATTR_TABLE        = 'publishers';
    const ATTR_INT_ID       = 'id';
    const ATTR_CHAR_NAME    = 'name';
    const ATTR_CHAR_ADDRESS = 'address';

    protected $table = self::ATTR_TABLE;

    protected $primaryKey = self::ATTR_INT_ID;

    public $incrementing = true;

    protected $fillable = [

        self::ATTR_CHAR_NAME,
        self::ATTR_CHAR_ADDRESS

    ];

    public function book()
    {
        return $this->hasMany(Book::class, Book::ATTR_INT_ID);
    }
}
