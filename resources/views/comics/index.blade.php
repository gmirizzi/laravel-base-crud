@extends('..base')
@section('title', 'Laravel DC Comics')
@section('content')
<div class="container">
    <div class="row row-cols-5">
        @foreach ($comics as $comic)
        @dd($comics)
        <div class="col">
            <a href="{{route('comics.show', 'comics[id]')}}">
                <div class="card">
                    <h2>{{$comic['title']}}</h2>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection