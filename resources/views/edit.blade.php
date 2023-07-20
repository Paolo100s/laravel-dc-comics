@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h2>EDIT NEW COMIC</h2>
        <form method="POST" action="{{route('update', $comic -> id)}}">

            @csrf
            @method("PUT")

            <label for="title">Title</label>
            <input type="text" name="title" id="" value="{{ $comic['title']}}">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" id="" value="{{ $comic['description']}}">
            <br>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="" value="{{ $comic['thumb']}}">
            <br>
            <label for="price">Price</label>
            <input type="text" name="price" id="" value="{{ $comic['price']}}">
            <br>
            <label for="series">Series</label>
            <input type="text" name="series" id="" value="{{ $comic['series']}}">
            <br>
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="" value="{{ $comic['sale_date']}}">
            <br>
            <label for="type">Type</label>
            <input type="text" name="type" id="" value="{{ $comic['type']}}">

            <br>
            <input class="mt-3 rounded" type="submit" value="UPDATE">
        </form>
    </div>
@endsection