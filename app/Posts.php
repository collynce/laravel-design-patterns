<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'name', 'author_id', 'category_id', 'title', 'description'
    ];

    public static function scopeFetchAuthor($query,$id)
    {
        return $query->where('id', '=', $id);
    }

}
