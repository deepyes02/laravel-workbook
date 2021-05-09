@extends('layout')
@section('content')
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
    <h2 class="{{$loop->even ? 'redHead' : ''}}"><a href="posts/{{$post->slug}}">{{$post->title}}</a></h2>
    <p><i>{{$post->excerpt}}</i></p>
    <p class="align-justify">{!! $post->body !!}</p>
    <p>{{$post->date}}</p>
    @endforeach
@endsection