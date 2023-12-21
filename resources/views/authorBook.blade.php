@extends('index')

@section('title', 'Author of books')

@section('content')

    @foreach($datas as $data)
        <h2>{{ $data['name'] }}</h2>
        <p>Author is <b>{{ $data->user->name }}</b></p>
    @endforeach
    
@endsection