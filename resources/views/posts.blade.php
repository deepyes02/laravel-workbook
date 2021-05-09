<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Blog Posts</h1>
    {{url('/')}}
    {{-- {{var_dump($posts)}} --}}
    @foreach ($posts as $post)
    <h2><a href="{{$post->href}}">{{$post->title}}</a></h2>
    <p><i>{{$post->excerpt}}</i></p>
    <p class="align-justify"><?=$post->body?></p>
    @endforeach

{{-- <script src="/script.js"></script> --}}
</body>
</html>
