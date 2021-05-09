<x-layout title="{{$category->name}}">
<h1>{{$category->name}}</h1>
@foreach ($category->posts as $post)
<h2><a href="#">{{$post->title}}</a></h2>
<p><i>{{$post->excerpt}}</i></p>
<p>{!! $post->body !!}</p>
@endforeach
<a href="{{url('/')}}">Home</a>
</x-layout>