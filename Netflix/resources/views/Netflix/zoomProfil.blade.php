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
            <div id="nav" class="nav d-flex align-items-center">
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
            <div class="col-md-8 offset-2">
                <h1>Mon Compte</h1>
                <hr class="separation">
                
                <div class="row mb-5">
                    <div class="col-md-3">
                        <h3>ADHÉSION ET FACTURATION</h3>
                    </div>
                    <div class="col-md-4">
                        <h5>{{$usager->email}}</h5>
                        <h5 class="pwd">Password : ********</h5>
                    </div>
                    <div class="col-md-4 lien offset-1">
                        <a href="{{route('Netflix.modifierUsager', [$usager] )}}">Changer d'email</a>
                        <br>
                        <a href="{{route('Netflix.modifierUsager', [$usager] )}}">Changer de mot de passe</a>
                    </div>
                </div>

                <hr class="separation">
                
                <div class="row mb-5">
                    <div class="col-md-3">
                        <h3>DÉTAIL DU PLAN</h3>
                    </div>
                    <div class="col-md-4">
                        <h5>4 écrans + ULTRA HD</h5>
                        <hr class="separation">
                        <h4>Vous avez un plan DVD</h4>
                    </div>
                    <div class="col-md-4 lien offset-1">
                        <a href="{{route('Netflix.modifierUsager', [$usager] )}}">Changer de plan</a>
                        <br>
                        <a href="{{route('Usagers.destroy', [$usager->id])}}">Annuler le plan (Supprimer le profil)</a>
                    </div>
                </div>
                <hr class="separation">
                
                <div class="row mb-5">
                    <div class="col-md-3">
                        <h3>RÉGLAGES</h3>
                    </div>
                    <div class="col-md-4">
                        <a href="">Réglages de communications</a>
                        <br>
                        <a href="">Contrôle parental</a>
                        <br>
                        <a href="">Test de participation</a>
                        <br>
                        <a href="">Activer un appareil</a>
                    </div>
                    <div class="col-md-4">
                        <a href="">DVD addresse de livraison</a>
                        <br>
                        <a href="">Accès Blu-ray</a>
                        <br>
                        <a href="">Assigner un DVD à un profile</a>
                    </div>
                </div>
                <hr class="separation">
                
                <div class="row mb-5">
                    <div class="col-md-3">
                        <h3>MON PROFIL</h3>
                    </div>
                    <div class="col-md-4">
                        <h4><img src="{{$usager->profil}}" height="40px" width="40px" class="me-3">{{$usager->prenom}}</h4>
                        <hr class="separation">
                        <h4>Rôle : {{$usager->role}}</h4>
                        <h4>Nom complet : {{$usager->prenom}} {{$usager->nom}}</h4>
                    </div>
                    <div class="col-md-4 lien offset-1">
                        <a href="{{route('Netflix.modifierUsager', [$usager] )}}">Modifier le profil</a>
                        <br>
                        <a href="{{route('Usagers.destroy', [$usager->id])}}">Supprimer le profil</a>
                    </div>
                </div>
                <hr class="separation">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <h3>USAGERS</h3>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        </div>

    </div>    





    
    <script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>
</body>
</html>