<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - {{ $personne->nom }}</title>
    <link rel="stylesheet" href="../zoomPersonne.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="zoomPersonne">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8 col-md-8 offset-2 boiteZoom">
                <div class="row mt-5">
                    <div class="col-md-1 col-1">
                        <a href="{{route ('Netflix.personne')}}"><i class="fa-solid fa-arrow-left fa-2x" style="color: #ffffff;"></i></a>
                    </div>
                    
                    <div class="row">
                        <h1 class="titre text-center">{{ $personne->nom }}</h1>
                    </div>
                    @if($personne->id != 999)
                    <div class="row">
                        <div class="col-2">
                            <img class="portrait col-12" src="{{ $personne->portrait}}"/>
                        </div>
                        <div class="col-5">
                            <p> Date de naissance : {{ $personne->dateNaissance }}</p>
                            <p>Lieu de naissance : {{ $personne->lieuNaissance }}</p>
                            <p>Âge : {{ $personne->age }} ans</p>
                            @auth
                                @if(Auth::user()->role == 'admin')
                                    <a href="{{route('Netflix.modifierPersonne', [$personne])}}" class="btn"><i class="fa-solid fa-file-pen fa-2x poubelle" style="color: #ffffff;"></i></a>
                                    <form method="POST" action="{{route('Personne.destroy', [$personne->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn"><i class="fa-solid fa-trash fa-2x" style="color: #ffffff;"></i></button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <h2>Films produits</h2>
                        <div class="row_colonne">
                            @foreach($personne->filmsRealises as $films)
                            <a href="{{route('Netflix.show', [$films] )}}">
                                <img src="{{ $films->affiche }}" class="row_posterLarge row_poster" width="200px" height="400px"/>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>
</body>
</html>