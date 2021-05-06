<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} - {{$siteName}}</title>
    <style>/*global style*/
    body {margin:0; padding:0 5px;}
    #main-header-bar{
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding: 0 20px;
    }
    #main-header-bar .logo{
        font-size: 60px;
        font-family: monospace;
        color:rgb(124, 47, 47);
    }
    #main-nav ul {
        list-style:none;
        display:flex;
        gap:20px;
        justify-content: flex-end;
    }
    #main-nav ul li {
        background:black;
        padding: 5px;
    }
    #main-nav ul li a {
        color:white;
        padding: 25px;
        font-size:22px;
        text-decoration:none;
    }
    #main-nav ul li a:hover{
        color:red;
        transition: 0.2s all ease-in;
    }
    </style>
</head>
<body>
    @if (null !== session('username'))
    <p>You are logged in as {{session('username')}}. <a href="logout">Logout</a></p>
    @else
    <p><a href="login">Login</a> to this site.</p>
    @endif
    <header id="main-header-bar">
        <div class="logo">
            LARAVEL
        </div>
        <nav id="main-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/places">Places</a></li>
                @if(null !== session('username'))
                <li><a href="/logout">Logoff</a></li>
                @else
                <li><a href="/login">Login</a></li>
                @endif
            </ul>
        </nav>
    </header>
