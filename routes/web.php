<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Route;

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
    
    // \Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql, $query->bindings);
    // });

    return view('posts', [

            'posts' => Post::latest('created_at')->get()
        
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
        
        'posts' => $category->posts
    
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [

        'posts' => $author->posts

    ]);
});
