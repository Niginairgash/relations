@extends('index')

@section('title', 'Phone of users')

@section('content')

    @foreach($datas as $data)
        <h2>User: {{ $data['name'] }}</h2>
        <p>Tasks: 
            <ol>
            @foreach($data->tasks as $task)
                <li>{{ $task->name }}</li>
            @endforeach
            </ol>  
        </p>
        <p>--------------------------------</p>
    @endforeach

@endsection