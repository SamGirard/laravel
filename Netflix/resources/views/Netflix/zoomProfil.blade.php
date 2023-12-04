<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - {{ $usager->nom }}</title>
    <link rel="stylesheet" href="../zoomPersonne.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="monCompte">
    <div class="container-fluid">
        <div class="row">
            <div id="nav" class="nav">
                <img class="nav__logo" src="../images/Netflix-Logo.png" alt="" />
                <a href="{{route ('Netflix.index')}}">Accueil</a>
                <a href="{{route ('Netflix.personne')}}">Réalisateurs/producteurs</a>
                <a href="{{route ('Netflix.acteur')}}">Acteurs</a>
                

                @auth
                    @if(Auth::user()->role == 'admin')
                    <a href="{{route('Netflix.createFilm')}}">Ajouter un film</a>
                    <a href="{{route('Acteur.createActeur')}}">Ajouter un acteur</a>
                    <a href="{{route('Personne.createPersonnes')}}">Ajouter un réalisateurs/producteurs</a>
                    @endif
                @endauth

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="deco" type="submit">Déconnexion</button>
                </form>
                <a href="{{route('Netflix.zoomUsager', [$usager] )}}"><img class="nav__avatar zoomP" src="{{$usager->profil}}" alt="" /></a>
            </div>
        </div>

        <div class="row information">
            <div class="col-md-3 offset-2">
                <h1>Mon Compte</h1>
                <hr class="separation">
                
                <h3>ADHÉSION ET FACTURATION</h3>

                <hr class="separation">
                
                <h3>DÉTAIL DU PLAN</h3>
                <hr class="separation">
                
                <h3>RÉGLAGES</h3>
                <hr class="separation">
                
                <h3>MON PROFIL</h3>
            </div>

            <div class="col-md-5">
                <h4>{{$usager->email}}</h4>
                <hr class="separation">
            </div>
        </div>
        
    </div>    





    
    <script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>
</body>
</html>