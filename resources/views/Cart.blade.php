<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    @foreach ($products as $product)
    <h3>{{$product->title}}</h3>
    <form action="{{ url('deleteCart/' . $product->id)}}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete" />
    </form>
    <img src="{{asset('images/' . $product->img)}}">
    <p>Price: {{$product->price}}</p>
    <form action="{{ url('/updateCart/' . $product->id)}}" method="Post">
        @csrf
        Quantity: <input type="number" value="1" name="qty" />
        <input type="submit" value="submit" />
    </form>
    <hr>
    @endforeach

    @foreach ($products as $product)
    <p>{{$product->title}} {{$product->quantity}} x</p>
    @endforeach
    <h3>{{$text}} {{$total}}</h3>
</body>

</html>