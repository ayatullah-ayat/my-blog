<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    public $title;
    
    public $excerpt;
    
    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;

        $this->excerpt = $excerpt;

        $this->date = $date;

        $this->body = $body;

        $this->slug = $slug;
    }

    public static function all()
    {
        // retrieve all the data from a directory and create some objects using metadata

        return cache()->rememberForever('posts', function () {
            return collect(File::files(resource_path("posts/")))

            ->map(fn ($file) => YamlFrontMatter::parseFile($file))

            ->map(
                fn ($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                )
            )->sortByDesc('date');
        });

        // return collect(File::files(resource_path("posts/")))

        //     ->map(fn ($file) => YamlFrontMatter::parseFile($file))

        //     ->map(
        //         fn ($document) => new Post(
        //             $document->title,
        //             $document->excerpt,
        //             $document->date,
        //             $document->body(),
        //             $document->slug
        //         )
        //     )->sortByDesc('date');


        // $files = File::files(resource_path("posts/"));

        // return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {

        // all of the blog post, find the one with a slug that matches the one that was requested


        return static::all()->firstWhere('slug', $slug);

            
        
        
        
        
        
        
        // $path = resource_path('posts/' . $slug . '.html');

            // if(! file_exists($path)) {
                
            //     throw new ModelNotFoundException();

            //     }

            //     // catch in the browser for a certain time
            //     return cache()->remember("posts.{$slug}", 5, fn() =>  file_get_contents($path));

            // }
    }

    public static function findOrFail($slug)
    {
        $post =  static::all()->firstWhere('slug', $slug);

        if (! $post) {
            throw new ModelNotFoundException;
        }

        return $post;
    }
}
