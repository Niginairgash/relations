@extends('index')

@section('title', 'Phone of users')

@section('content')

    @foreach($datas as $data)
        <h2>Phone: {{ $data['phone'] }}</h2>
        <p>Belong to user: <b>{{ $data->user->name }}</b></p>
        <p>--------------------------------</p>
    @endforeach

@endsection