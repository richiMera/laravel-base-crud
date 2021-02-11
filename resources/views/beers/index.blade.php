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
       <div class="row">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CATEGORY</th>
                    <th>ABV</th>
                    <th>PRICE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
                <tr>
                    <th>{{$beer->id}}</th>
                    <td> <a href="{{route('beers.show', $beer->id)}}" class="">{{$beer->name}}</a></td>
                    <td>{{$beer->category}}</td>
                    <td>{{$beer->abv}}</td>
                    <td>{{$beer->price}}</td>
                  </tr>
                @endforeach
            <tbody>
        {{-- @foreach ($beers as $beer)
        <div class="card mr-2" style="width: 17rem;" >
            <img class="card-img-top" src="{{$beer->filepath}}" alt="">
            <div class="card-body text-center">
                <h2 class="card-text">{{$beer->name}}</h2>
                <p>{{$beer->price}}</p>
                <a href="{{route('beers.show', $beer->id)}}" class="stretched-link"></a>
            </div>
        </div> --}}
       </div>
    </div>

    
</body>
</html>