<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'name', 'author_id', 'category_id', 'title', 'description'
    ];

}
