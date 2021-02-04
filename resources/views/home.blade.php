@extends('master')

@section('title', 'Homepage')

@section('content')

<h3>Post a Message: </h3>
<form action="/create" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Enter Title...">
    <input type="text" name="content" placeholder="Enter Content...">
    <button type="submit">Submit</button>
</form>

<br>
<br>

<h3>Recent Messages:</h3>
<ul>
    @foreach ($messages as $message)

    <li>
        <strong>{{$message->title}}</strong>
        <br>
        {{$message->content}}
        <br>
        <!-- {{$message->created_at-> format('d-m-Y H:i')}} -->
        {{$message->created_at-> diffForHumans()}}
    </li>
    <br>

    @endforeach
</ul>
@endsection