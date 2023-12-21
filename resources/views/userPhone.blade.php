@extends('index')

@section('title')

@section('content')
    @foreach($datas as $data)
        <h2>User: {{ $data['name'] }}</h2>
        <p>Phone: {{ $data->phone['phone'] }}</p>
        <p><ol>
        @foreach($data->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
        </ol></p>
    @endforeach

@endsection