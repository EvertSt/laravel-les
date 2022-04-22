<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update Game</h1>

    <form action="{{ url('/games/' . $game->id)}}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <input type="text" name="title" value={{$game->title}} />
        <input type="number" name="price" step="any" value={{$game->price}} />
        <input type="submit" value="Submit Changes" />
    </form>
</body>

</html>