@extends('master')

@section('title', 'Homepage')

@section('content')

<h3>Post a Message: </h3>
<form action="/create" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Enter Title...">
    <br>
    <br>
    <input type="text" name="content" placeholder="Enter Content...">
    <br>
    <br>
    <button type="submit">Post</button>
    <br>
</form>

<br>
<br>

<h3>Recent Messages:</h3>
<ul>
    @foreach ($messages as $message)

    <li>
        <div class="">
            <strong>{{$message->title}}</strong>
        </div>
        <br>
        {{$message->content}}
        <br>
        <!-- {{$message->created_at-> format('d-m-Y H:i')}} -->
        {{$message->created_at-> diffForHumans()}}
        <br>
        <a href="/message/{{$message->id}} ">View</a>
        <a href="/edit/{{$message->id}} ">Edit</a>
    </li>
    <br>

    @endforeach
</ul>
@endsection