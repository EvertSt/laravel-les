<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>

<body>
    <h1>{{$game->title}}</h1>
    <div>
        <img src="{{asset('images/' . $game->img)}}">
        <p>ID: {{$game->id}}</p>
        <p>price: {{$game->price}}</p>
        <form action="{{ url('/cart/' . $game->id)}}" method="Post">
            @csrf
            <input type="submit" value="Add to cart" />
        </form>
    </div>
</body>

</html>