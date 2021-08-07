<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => $this->getPosts(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts/post', [
            'post' => $post
        ]);
    }

    public function getPosts()
    {

        return Post::latest('created_at')->filter(request(['search']))->get();
        // if (request('search')) {
        //     $posts
        //     ->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('body', 'like', '%' .request('search') . '%');
        // }
        // return $posts->get();
    }
}
