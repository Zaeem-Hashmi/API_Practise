<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function allBlogs()
    {
        return Blogs::all();
    }
    public function blogs($id)
    {
        $comments = Blogs::find($id)->comments;
        $blogs = Blogs::with('author')->where('id',$id)->first();
        return [
            'blog_name'=>$blogs->name,
            'blogs_description'=>$blogs->description,
            'blog_author'=>$blogs->author,
            'comments'=>$comments
        ];
    }
}
