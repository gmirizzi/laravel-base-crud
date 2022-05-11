@extends('..base')
@section('title', 'Add a new comic')
@section('content')
<div class="container p-5">
    <form method="POST" action="{{route('comics.store')}}">
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name='price' placeholder="0.00£" step='0.01' min='0'>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date">
        </div>    
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div>
@endsection