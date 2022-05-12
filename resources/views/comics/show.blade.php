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
<div class="container">
    <h2>{{$comic->title}}</h2>
</div>
@endsection
