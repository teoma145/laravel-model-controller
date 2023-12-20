@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="container mt-5 pt-5">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-12 col-md-3 card p-4 g-5">
            <img src="{{$movie->image}}" alt="{{$movie->title}}">
            {{$movie->title}}
        </div>
        @endforeach
    </div>



 </main>
@endsection
