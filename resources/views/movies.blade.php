@extends('index')

@section('title', 'Фильмы')

@section('content')

    @foreach($movies as $movie)
        <p>Movie: <b>{{ $movie['name'] }}</b></p>
        @foreach($movie->cinemas as $cinema)
            <p>in {{ $cinema['name'] }}</p>
        @endforeach
    @endforeach
    
@endsection