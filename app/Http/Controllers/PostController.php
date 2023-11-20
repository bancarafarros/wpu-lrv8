<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Post::all() // manggil function static pake ::
        ]);
    }

    // public function show($id)
    public function show(Post $post) // route model binding
    {
        return view('post', [
            "title" => "Single Post",
            // "post" => Post::find($id) // manggil function static pake ::
            "post" => $post // route model binding
        ]);
    }
}
