@extends('index')

@section('title', 'cinemas')

@section('content')

    @foreach($cinemas as $cinema)
        <h2>{{ $cinema['name'] }}</h2>
        @foreach($cinema->movies as $movie)
            <p>{{ $movie->name }}</p>
        @endforeach
    @endforeach
    
@endsection