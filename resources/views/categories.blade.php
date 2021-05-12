<x-layout title="Categories">
<h1>All Categories {{count($categories)}}</h1>
<br><br><hr><br>

@foreach ($categories as $cat)

<div><a href="{{ url('/') . '/category/' . $cat->slug}}"><h2>{{strtoupper($cat->name)}}</h2></a><span>{{ count($cat->posts) >= 2 ? count($cat->posts) . ' posts' : count($cat->posts) . ' post' }}</span></div>
<div>
@foreach ($cat->posts as $categorized)
<div>
<a href="{{url('/') . '/posts/' . $categorized->slug}}"><h3>{{$categorized->title}}</h3></a>
<i>{{$categorized->excerpt}}</i>
<p>{!! $categorized->body !!}<a href="{{url('/') . '/posts/' . $categorized->slug}}">Read More</a></p>
</div>
@endforeach
</div>
@endforeach
</x-layout>