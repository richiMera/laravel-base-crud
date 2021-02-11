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
        <form action="{{route('beers.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"  placeholder="">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" id="category"  placeholder="">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price"  placeholder="">
            </div>
            <div class="form-group">
                <label for="abv">ABV</label>
                <input type="text" class="form-control" name="abv" id="abv"  placeholder="">
            </div>
            <div class="form-group">
                <label for="filePath">FilePath</label>
                <input type="text" class="form-control" name="filePath" id="filePath"  placeholder="">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>

            <a class= "btn btn-dark" href="{{route('beers.store')}}">Salva</a>

            
        </form>
    </div>
</body>
</html>