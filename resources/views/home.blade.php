@extends('master')

@section('title', 'Homepage')

@section('content')

<h3>Recent Messages:</h3>
<ul>
    @foreach ($messages as $message)

    <li>
        {{$message->title}} -
        {{$message->content}}
    </li>

    @endforeach
</ul>
@endsection