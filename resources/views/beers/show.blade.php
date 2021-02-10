<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card"  >
         <img class="card-img-top" src="{{$beer->filepath}}" alt="">
         <div class="card-body text-center">
           <h2 class="card-text">{{$beer->name}}</h2>
           <p>{{$beer->price}}</p>
         </div>
     </div>
     </div>
</body>
</html>