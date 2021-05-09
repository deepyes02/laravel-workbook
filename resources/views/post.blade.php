@extends('layout')
@section('content')
    <h1>Blog Posts</h1>
    <article>
        <h2><a href="{{url('/') . '/posts/' . $post->slug}}">{{$post->title}}</a></h2>
        <p><i>{{$post->excerpt}}</i></p>
        <p>{!! $post->body !!}</p>
        <p><i>{{$post->date}}</i></p>
    </article>
@endsection
