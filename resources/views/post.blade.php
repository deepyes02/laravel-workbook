<x-layout title="{{$post->title}}">
<h1>Blog Posts</h1>
    <article>
        <h2><a href="{{url('/') . '/posts/' . $post->slug}}">{{$post->title}}</a></h2>
        <p>Category: <a href="#">{{$post->category->name}}</a></p>
        <p><i>{{$post->excerpt}}</i></p>
        <p>{!! $post->body !!}</p>
        <p><i>{{$post->date}}</i></p>
    </article>
    <a href="{{url('/')}}">Home</a>
</x-layout>