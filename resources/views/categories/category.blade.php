<x-layout>
    <a href="/">Back</a>

    <h5 class="card-header">{!! $category->name !!}</h5>

    <h2><strong><u>posts</u></strong></h2>

    @foreach ($category->posts as $post)
        <h5>{!! $post->title !!}</h5>
            
        <div class="card-body">

            <a href="/categories/{{ $post->category->id }}"> {{ $post->category->name }} </a>

            <p class="card-text"><?= $post->body ?></p>
        
        </div>
    @endforeach
    
    
</x-layout>
