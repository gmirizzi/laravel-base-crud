@extends('..base')
@section('title', 'Laravel DC Comics | '. $comic->title)
@section('content')
<div id="jumbotron"></div>
<div id="topbar">
    <div class="container position-relative h-100">
        <div class="card">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="card-img-top">
        </div>
    </div>
</div>
<div class="container p-5">
    <h2>{{$comic->title}}</h2>
    <p class="text-secondary">{{$comic->description}}</p>
    <a class="btn btn-primary mb-3" href="{{route('comics.edit', $comic->id)}}">Edit</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" href="#">Delete</button>
    </form>
</div>
@endsection
