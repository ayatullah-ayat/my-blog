

    <x-layout>
        <a href="/">Back</a>

        <h5 class="card-header">{!! $post->title !!}</h5>
        
        <div class="card-body">

            <a href="">By Ayat </a>in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>

            <p class="card-text"><?= $post->body ?></p>
        
        </div>
    </x-layout>








