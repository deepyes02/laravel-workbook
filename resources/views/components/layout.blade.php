<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<nav id="nav">
<ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/')}}/category">Category</a></li>
<li><a href="{{url('/')}}/users">Users</a></li>
</ul>
</nav>
<div class="body-inner">
    {{$slot}}
</div>
</body>
</html>