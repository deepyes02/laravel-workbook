<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Trips</title>
</head>
<body>
<h2>All Trips</h2>
@foreach ($trips as $trip)
<li><h2>{{$trip->trip_name}}</h2>
<p>{{$trip->region}}</p>
<p>{{$trip->difficulty}}</p>
{!! $trip->trip_body!!}
</li>
@endforeach
</body>
</html>
