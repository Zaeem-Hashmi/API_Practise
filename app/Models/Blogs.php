<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    function author()
    {
        return $this->belongsTo(Author::class,'author_id','id');
    }
    function comments()
    {
        return $this->hasMany(Comment::class,'blog_id');
    }
}
