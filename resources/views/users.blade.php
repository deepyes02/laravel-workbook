<x-layout title="Users">

@if(sizeof($users) <= 0)
<h2>Sorry no users in the database, create users and posts so and they will appear</h2>
@else

@foreach($users as $user)
<h2><a href="{{url('/') . '/users/' . $user->slug}}">{{$user->username}}</a></h2>
<p>{{count($user->posts) > 1 ? count($user->posts) . ' posts' : count($user->posts) . ' post'}}</p>

@foreach ($user->posts as $post)
<h3>{{$post->title}}</h3>
<p>{!! $post->excerpt !!}</p>
<br>
@endforeach

<br><br>
@endforeach


@endif
</x-layout>