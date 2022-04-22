<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AddGame</title>
</head>

<body>
    <h1>Add Game</h1>

    <form action="{{ url('/games')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" />
        <input type="number" name="price" step="any" placeholder="price" />
        <input type="file" name="img" />
        <input type="submit">
    </form>
</body>

</html>