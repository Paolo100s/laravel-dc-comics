@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h2 class="text-center">SHOP
            <a href="{{route('create')}}">+</a>
        </h2>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('show', $comic -> id)}}">{{ $comic -> title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection