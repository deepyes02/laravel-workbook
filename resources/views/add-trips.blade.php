<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trips</title>
</head>
<body>
<h2>Add Trips</h2>
<form action="post" action="/add-trips">
@csrf
<label for="trip_name">Trip Name</label>
</form>
</body>
</html>
