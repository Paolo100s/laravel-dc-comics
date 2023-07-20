@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <h2>{{ $comic -> title}}</h2>   
        <img src="{{ $comic -> thumb }}" width='300px'>
        <ul class="list-unstyled">
            <li>{{ $comic -> series }}</li>
            <li>{{ $comic -> type }}</li>
            <li>{{ $comic -> price }}</li>
        </ul>

        {{-- Json --}}
        {{-- <ul>
            @foreach (json_decode($comic -> artists) as $artist )
                <li>
                    {{ $artist}}
                </li>
            @endforeach
        </ul> --}}
    </div>
@endsection