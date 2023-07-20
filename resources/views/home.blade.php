@extends('layouts.main-layout')

@section('content')
    <div class="containe text-center">
        <h2>SHOP
            <a href="{{route('create')}}">+</a>
        </h2>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li class="my-3">
                    <a href="{{ route('show', $comic -> id)}}">{{ $comic -> title }}</a>
                    <br>
                    <a class="btn btn-primary mx-3" href="{{route('edit', $comic -> id)}}">EDIT</a>
                    <form class="d-inline" method="POST" action="{{route('delete', $comic -> id)}}">
                        @csrf
                        @method('DELETE')

                       <input type="submit" class="btn btn-primary mx-3" value="DELETE">
                    </form>
                    
                </li>
            @endforeach
        </ul>
    </div>
@endsection