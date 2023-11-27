<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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


// gk dipake lagi, dipindah ke post controller
// Route::get('/posts', function () {
//     return view('posts', [  
//         "title" => "Post",
//         "posts" => Post::all() // manggil function static pake ::
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);

// halaman single post
// Route::get('/posts/{slug}', function ($slug) { // gk dipake lagi, dipindah ke post controller
//     return view('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug) // manggil function static pake ::
//     ]);
// });

// Route::get('/posts/{slug}', [PostController::class, 'show']);
// Route::get('/posts/{post}', [PostController::class, 'show']); // route model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']); // route model binding

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
}); // route model binding

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});
