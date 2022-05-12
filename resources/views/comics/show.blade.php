@extends('..base')
@section('title', 'Laravel DC Comics | '. $comic->title)
@section('content')
<div class="container">
    <h2>{{$comic->title}}</h2>
</div>
@endsection
