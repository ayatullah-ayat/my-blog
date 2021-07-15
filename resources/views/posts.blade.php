<x-layout>
      @foreach ($posts as $post)

          <div class="card">
        
            <a href="/posts/{{ $post->slug }}">
        
              <h5 class="card-header">{{ $post->title }}</h5>
        
            </a>
        
            <div class="card-body">
              <p><a href="{{ $post->slug }}">{{ $post->category->name }}</a></p>
        
              <p class="card-text">{{ $post->excerpt }}</p>
        
            </div>
        
          </div>
        
          @endforeach
 </x-layout>
    
  
  
  
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

      


        
    