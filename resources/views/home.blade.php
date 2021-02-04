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
        {{$message->created_at-> format('d-m-Y H:i')}}
        {{$message->created_at-> diffForHumans()}}
    </li>
    <br>

    @endforeach
</ul>
@endsection