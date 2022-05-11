@extends('..base')
@section('title', 'Laravel DC Comics')
@section('content')
<div class="container text-center p-5">
    <a href="{{route('comics.create')}}" class="btn btn-primary">Add new Comic</a>
    <div class="row row-cols-5 p-5">
        @foreach ($comics as $comic)
        <div class="col">
            <a href="{{route('comics.show', $comic->id)}}">
                <div class="card">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <h2>{{$comic->title}}</h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection