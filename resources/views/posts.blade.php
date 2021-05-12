<x-layout title="All Posts">
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
    <h2 class="{{$loop->even ? 'redHead' : ''}}"><a href="posts/{{$post->slug}}">{{$post->title}}</a></h2>
    <p><i>{{$post->excerpt}}</i></p>
    <p>Category: <a href="{{url('/')}}/category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p class="align-justify">{!! $post->body !!}</p>
    <p>Author: <a href="{{url('/') . '/users/' . $post->user->slug}}">{{$post->user->username}}</a></p>
    @endforeach
</x-layout>