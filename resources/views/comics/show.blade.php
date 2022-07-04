@extends('layout.main')

@section('content')
    <div class="container">
        <a class="mt-4" style="display: inline-block; text-decoration: none" href="{{route('comics.index')}}"><< Back to comics</a>
        <h1 class="mt-3">{{ $comic->title }} </h1>
        <span>Tag: </span><span class="mb-3 badge rounded-pill text-bg-warning">{{ $comic->type}}</span><br>
        <img class="w-25 mb-3" src="{{$comic->image}}" alt=""><br>
        <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a>
    </div>
@endsection
