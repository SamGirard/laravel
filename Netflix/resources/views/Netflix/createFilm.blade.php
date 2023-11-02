<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Ajout d'un film</title>
    </head>
    <body>
        <form method="post" action="{{route('Netflix.store')}}">
            @csrf
            <div class="form-group form-control">
                <input type="text" class="form-control" id="nomFilm" placeholder="Titre du film" name="titre">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </body>
</html>