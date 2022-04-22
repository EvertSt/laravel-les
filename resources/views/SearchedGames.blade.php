<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Resultaten voor {{$title}}</h1>
    <hr>
    @foreach ($games as $game)
    <img src="{{asset('images/' . $game->img)}}">
    <p>ID: {{$game->id}}</p>
    <p>Title: {{$game->title}}</p>
    <p>Price: {{$game->price}}</p>
    <hr>
    @endforeach
</body>

</html>