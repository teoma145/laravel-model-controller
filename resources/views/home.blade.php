@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="container mt-5 pt-5">
    <div class="bg-info">
        <h1 class="text-danger "><a href="{{route('movies.index')}}">Clicca qui per la lista di film</a></h1>
    </div>
 </main>
@endsection
