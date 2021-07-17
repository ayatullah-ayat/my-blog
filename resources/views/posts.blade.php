@extends('layouts/layouts')

@section('content')
      
      <h2>{{ $my_title }}</h2>

      <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><a href="/post/1">post 1</a> </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on </p>
        </div>
      </div>

      <div class="card text-white bg-secondary mb-3">
        <div class="card-header">post 2</div>
        <div class="card-body">
          <p class="card-text">Some quick example text to buil</p>
        </div>
      </div>

      <div class="card text-white bg-secondary mb-3">
        <div class="card-header">post 3</div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the</p>
        </div>
      </div>
      @endsection
      


        
    