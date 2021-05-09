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
<article>

    <h2><a href="{{url('/'). '/' . $post->href}}">{{$post->title}}</a></h2>
        <p><i>{{$post->excerpt}}</i></p>
        <p>{{$post->body}}</p>
        <p>{{$post->date}}</p>
</article>
<a href="/">Go back</a>
{{-- <script src="/script.js"></script> --}}
</body>
</html>
