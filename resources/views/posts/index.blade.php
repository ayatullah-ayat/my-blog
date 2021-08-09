<x-layout>


@include('posts._header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    


    @if ($posts->count())
        
      <x-posts-grid :posts="$posts"/>
        
    @else
        <p class="text-center">No posts yet. please check back later</p>
    @endif
    

</main>

</x-layout>

      {{-- @foreach ($posts as $post)

          <div class="card">
        
            <a href="/posts/{{ $post->slug }}">
        
              <h5 class="card-header">{{ $post->title }}</h5>
        
            </a>
        
            <div class="card-body">

              <a href="authors/{{ $post->author->username }}">By {{ $post->author->name }} </a>in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
        
              <p class="card-text">{{ $post->excerpt }}</p>
        
            </div>
        
          </div>
        
          @endforeach --}}

 
    
  
  
  
  {{-- @extends('layouts/layout')


    @section('content')
        
        @foreach ($posts as $post)

          <div class="card">
        
            <a href="/posts/{{ $post->slug }}">
        
              <h5 class="card-header">{{ $post->title }}</h5>
        
            </a>
        
            <div class="card-body">
        
              <p class="card-text">{{ $post->excerpt }}</p>
        
            </div>
        
          </div>
        
          @endforeach
   
      @endsection --}}

      


        
    