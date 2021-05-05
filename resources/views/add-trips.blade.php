<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trips</title>
    <style>
        #trip_form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 50%;
        }
    </style>
</head>

<body>
    <h2>Add Trips</h2>

    @if($errors->any())
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif

    <form id="trip_form" method="POST" action="/add-trips">
        @csrf
        @method('POST')
        <label for="trip_name">Trip Name</label>
        <input type="text" name="trip_name" id="trip_name">
        <label for="region">Region</label>
        <input type="text" name="region" id="region">
        <label for="difficulty">Difficulty</label>
        <select name="difficulty" id="difficulty">
            <option value="easy">Easy</option>
            <option value="moderate">Moderate</option>
            <option value="difficult">Difficult</option>
            <option value="strenuous">Strenuous</option>
        </select>
        <label for="trip_description">Trip body</label>
        <textarea name="trip_description" value="" placeholder="Explain this trip"></textarea>
        <input type="submit" value="Add Trip">
    </form>
</body>

</html>
