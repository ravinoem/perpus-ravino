<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    const ATTR_TABLE            = 'books';
    const ATTR_INT_ID           = 'id';
    const ATTR_CHAR_NAME        = 'name';
    const ATTR_INT_AUTHOR       = 'author_id';
    const ATTR_INT_PUBLISHER    = 'publisher_id';
    const ATTR_DATETIME_DELETED = 'deleted_at';

    protected $table        = self::ATTR_TABLE;

    protected $primaryKey   = self::ATTR_INT_ID;

    public $incrementing    = true;

    protected $fillable     = [

        self::ATTR_CHAR_NAME,
        self::ATTR_INT_AUTHOR,
        self::ATTR_INT_PUBLISHER

    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, self::ATTR_INT_PUBLISHER);
    }

    public function author()
    {
        return $this->hasMany(Author::class, Author::ATTR_INT_ID);
    }
}

