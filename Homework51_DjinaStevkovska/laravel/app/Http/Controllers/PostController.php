<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function show($id)
    {
        return view('posts.show', ['post' => Post::find($id)]);
    }

    // public function show(Post $post)
    // {
    //     return view('posts.show', ['post' => $post]);
    // }


}
