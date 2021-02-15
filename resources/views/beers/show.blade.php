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
        <div class="row">
        
            <div class="col-md-6" >
                <img class="card-img-top" src="{{$beer->filepath}}" alt="">
            </div>
            <div class="col-md-6" >
                <h2>{{$beer->name}}</h2>
                <h3>Tipo: {{$beer->category}}</h3>
                <span><strong>Gradazione:</strong> {{$beer->abv}}</span>
                <p><strong>Descrizione:</strong> {{$beer->description}}</p>
            </div>
            <a class="btn btn-primary" href="{{route('beers.index')}}">Torna all'elenco</a>
       
        </div>
     </div>
</body>
</html>