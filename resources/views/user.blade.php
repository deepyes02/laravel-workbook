<x-layout title="{{$user->username}}">
<h2>{{count($user->posts)}} posts by :{{$user->username}}</h2>
@foreach ($user->posts as $post)
<h2><a href="{{url('/') . '/posts/' . $post->slug}}">{{$post->title}}</a></h2>
<p>{!! $post->excerpt !!}</p>
@endforeach
</x-layout>