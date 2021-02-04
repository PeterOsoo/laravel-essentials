@extends('master')

@section('title', 'Homepage')

@section('content')

<h3>Recent Messages:</h3>
<ul>
    @foreach ($messages as $message)

    <li>
        <strong>{{$message->title}}</strong>
        <br>
        {{$message->content}}
        <br>
        {{$message->created_at}}
    </li>
    <br>

    @endforeach
</ul>
@endsection