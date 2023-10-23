<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="netflix.css">

    <title>Document</title>
</head>
<body>
        <img class="nav__logo" src="../images/Netflix-Logo.png" alt="" />

        @if(count($films))
            @foreach($films as $film)
                <h1>{{$film->titre}}</h1>
                <p>{{$film->resume}}</p>
                <img src="{{$film->affiche}}" width="200px" height="400px">
            @endforeach
        @else

        @endif
</body>
</html>