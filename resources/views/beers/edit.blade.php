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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
        <form action="{{route('beers.update', $beer->id)}}" method="post">

            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"  value="{{$beer->name}}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" id="category"  value="{{$beer->category}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price"  value="{{$beer->price}}">
            </div>
            <div class="form-group">
                <label for="abv">ABV</label>
                <input type="text" class="form-control" name="abv" id="abv"  value="{{$beer->abv}}">
            </div>
            <div class="form-group">
                <label for="filepath">FilePath</label>
                <input type="text" class="form-control" name="filepath" id="filepath"  value="{{$beer->filepath}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{$beer->description}}</textarea>
            </div>

            <input class="btn btn-dark" type="submit" value="Modifica">

            
        </form>
    </div>
</body>
</html>