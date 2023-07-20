@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h2>CREATE NEW COMIC</h2>
        <form method="POST" action="{{route('store')}}">

            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" id="">
            <br>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="">
            <br>
            <label for="price">Price</label>
            <input type="text" name="price" id="">
            <br>
            <label for="series">Series</label>
            <input type="text" name="series" id="">
            <br>
            <label for="sale_date">Sale date</label>
            <input type="date" name="sale_date" id="">
            <br>
            <label for="type">Type</label>
            <input type="text" name="type" id="">

            <br>
            <input class="mt-3 rounded" type="submit" value="CREATE">
        </form>
    </div>
@endsection