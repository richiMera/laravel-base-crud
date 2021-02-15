
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
        <header>
            
        </header>
        <main>
            <div class="container">
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
                            <td>{{$beer->id}}</td>
                            <td>{{$beer->name}}</td>
                            <td>{{$beer->category}}</td>
                            <td>{{$beer->abv}}</td>
                            <td>{{$beer->price}}</td>
                            <td><a href="{{route('beers.show', $beer->id)}}" class="btn btn-secondary">Mostra</a></td>
                            <td><a href="{{route('beers.edit', $beer->id)}}" class="btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="{{route('beers.destroy', $beer->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                       </tr>
                        @endforeach
                    </tbody>
                </table>  
                <a class="btn btn-dark" href="{{route('beers.create')}}">Crea Nuovo</a>
             </div>
        </main>
        <footer>
            
        </footer>

    </body>
</html>