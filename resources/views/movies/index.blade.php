@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="container mt-5 pt-5">
    @foreach($movies as $movie)
    <li>{{$movie->title}}</li>
    @endforeach
 </main>
@endsection
