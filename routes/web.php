<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\File;

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
    $posts = Post::all();

    return view('posts', [

            'posts' => $posts
        
        ]);
});


Route::get('posts/{post}', function (Post $post) {

    // FInd a post by its slug and pass it to a view called "post"

    return view('posts/post', [

        'post' => $post
    
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('categories/category', [
        
        'category' => $category
    
    ]);
});
