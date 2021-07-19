<x-layout>
    <a href="/">Back</a>

    

    <h2><strong><u>posts with categories</u></strong></h2>

    @foreach ($posts as $post)
        <h5>{!! $post->title !!}</h5>
            
        <div class="card-body">

            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>

            <p class="card-text"><?= $post->body ?></p>
        
        </div>
    @endforeach
    
    
</x-layout>
