<?php

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

    // $files = File::files(resource_path("posts/"));


    $posts = Post::all();

    return view('posts', [

            'posts' => $posts
        
        ]);

    // $posts = array_map(function($file){
        
    //     $document = YamlFrontMatter::parseFile($file);

    //     return new Post(
            
    //         $document->title,
            
    //         $document->excerpt,
            
    //         $document->date,
            
    //         $document->body(),

    //         $document->slug
        
    //     );

    // } , $files);
    
    
    // foreach($files as $file) {

    //     $document = YamlFrontMatter::parseFile($file);

    //     $posts[] = new Post(
            
    //         $document->title,
            
    //         $document->excerpt,
            
    //         $document->date,
            
    //         $document->body(),

    //         $document->slug
        
    //     );
   
    // }

    
    // $document = YamlFrontMatter::parse(file_get_contents(resource_path("posts/my-fourth-post.html")));

    // $posts = Post::all();

    // ddd($posts);
});


Route::get('posts/{post}', function ($slug) {

    // FInd a post by its slug and pass it to a view called "post"

    $post = Post::find($slug);

    return view('posts/post', [
        'post' => $post
    ]);

    // $path = __DIR__ . '/../resources/posts/' . $slug . '.html';


    // if(! file_exists($path)) {
    //     return redirect('/');
    //     // abort(404);
    // }

    

    // catch in the browser for a certain time
    // $post = cache()->remember("posts.{$slug}", 5, fn() =>  file_get_contents($path));

    // return view('posts/post', [
    //     'post' => file_get_contents($path)
    // ]);
})->where('post', '[A-z_/-]+');
