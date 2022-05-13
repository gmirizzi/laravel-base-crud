@extends('..base')
@section('title', 'Laravel DC Comics')
@section('content')
<div class="container text-center p-5">
    <a href="{{route('comics.create')}}" class="btn btn-primary">Add new Comic</a>
    <div class="row row-cols-5 p-5">
        @foreach ($comics as $comic)
        <div class="col">
            <a class="text-reset text-decoration-none" href="{{route('comics.show', $comic->id)}}">
                <div class="card border-0 text-start bg-transparent h-100 ">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body d-flex flex-column h-100 justify-content-between">
                        <h5 class="card-title text-uppercase text-white">{{$comic->title}}</h5>
                        <div>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection