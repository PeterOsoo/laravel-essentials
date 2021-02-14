@extends('master')
<style>
    h3 {
        color: rgb(43, 25, 22);
        font-size: 1.4rem;
        text-transform: uppercase;
    }

    .message {
        text-align: center;
        background: inherit;
        margin: 0 30%;
    }

    .content {
        padding: .4rem;
        border: 1px solid grey;
    }

    .date {
        text-align: end;
        padding-right: 2rem;
    }
</style>


@section('title', 'Message')


@section('content')

<div class="message">

    <h3>{{$message->title}} </h3>
    <p class="content">{{$message->content}} </p>

    <p class="date">
        {{-- Created at --}}
        Posted on :
        {{-- {{$message->created_at-> format('d-m-Y H:i')}} --}}
        {{$message->created_at-> format('d/m/Y')}}
    </p>

</div>



@endsection