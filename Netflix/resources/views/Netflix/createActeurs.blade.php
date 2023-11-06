<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ajoutFilm.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Ajout d'un acteur</title>
    </head>
    <body>
        @if(isset($errors) && $errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('Netflix.index')}}"><img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-4">
                    <form method="post" action="{{route('Acteur.store')}}" class="formulaireAjoutFilm">
                        @csrf
                        <div>
                            <h2>Ajouter un acteur</h2>
                            <input name="nom" type="text" class="form-control mb-3 mt-5" id="nomFilm" placeholder="Nom" name="nom">

                            <input type="text" class="form-control mb-3" id="naissance" placeholder="Date de naissance" name="dateNaissance">

                            <input type="text" class="form-control mb-3" id="lieu" placeholder="Lieu de naissance" name="lieuNaissance">

                            <input type="text" class="form-control mb-3" id="portrait" placeholder="Portrait" name="portrait">

                            <input type="text" class="form-control mb-3" id="age" placeholder="Âge" name="age">
                       
                            <button type="submit" class="bouton form-control">Ajouter</button>
                            <p class="fois">Première fois sur l'ajout de film? Aller voir le centre d'aide.</p>
                            <p class="cap">Cette page est protégée par Google reCAPTCHA pour s'assurer que vous n'êtes pas un robot logiciel. <span class="plus">En savoir plus.</span></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row info">
                <div class="col-md-6 offset-3 pt-5 pb-5">
                    <p>Des questions? Téléphonez au 1-844-640-3067</p>

                    <div class="row plusInfo">
                        <div class="col-md-3">
                            <p>FAQ</p>
                            <p>Confidentialité</p>
                        </div>

                        <div class="col-md-3">
                            <p>Centre d'aide</p>
                            <p>Paramètre témoins</p>
                        </div>

                        <div class="col-md-3">
                            <p>Netflix Shop</p>
                            <p>Informations sur la société</p>
                        </div>
                        <div class="col-md-3">
                            <p>Conditions d'utilisations</p>
                            <p>Choix liés à la publicité</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>