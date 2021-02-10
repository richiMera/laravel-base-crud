<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Beers</title>
</head>
<body>
    <div class="container">
       @foreach ($beers as $beer)
       <div class="card" style="width: 18rem;" >
        <img class="card-img-top" src="{{$beer->filepath}}" alt="">
        <div class="card-body">
          <p class="card-text">{{$beer->name}}</p>
        </div>
    </div>
       @endforeach
    </div>
</body>
</html>