

    <x-layout>
        <a href="/">Back</a>

        <h5 class="card-header">{!! $post->title !!}</h5>
        
        <div class="card-body">

            <a href="#">By {{ $post->author->name }} </a>in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>

            <div class="card-text">{!! $post->body !!}</div>
        
        </div>
    </x-layout>








