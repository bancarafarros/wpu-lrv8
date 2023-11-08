<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Charr",
        "email" => "charr@gmail.com",
        "image" => "aaa.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Uyee",
            "slug" => "uyee",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ],
        [
            "title" => "Hahay",
            "slug" => "hahay",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ]
    ];

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Uyee",
            "slug" => "uyee",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ],
        [
            "title" => "Hahay",
            "slug" => "hahay",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
