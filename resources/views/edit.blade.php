@extends('master')

@section('title', 'Edit Page')

@section('content')
<h2>Edit Post</h2>

<form action="/edit" method="post">
    @csrf

    <input type="text" name="title" placeholder="enter title" value="{{$message['title']}}">
    <br><br>
    <input type="text" name="content" placeholder="enter content" value="{{$message['content']}}">
    <br><br>
    <button type="submit">edit</button>
</form>
@endsection