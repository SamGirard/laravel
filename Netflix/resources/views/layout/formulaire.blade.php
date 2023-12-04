<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('ajoutFilm.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>
    <body>
    @if(session('success'))
        <div class="success">
            <h3>{{ session('success') }} <i class="fa-solid fa-circle-check" style="color: #44d930;"></i></h3>
        </div>
    @endif

    @yield('contenu')

    <footer></footer>
    
    </body>
</html>