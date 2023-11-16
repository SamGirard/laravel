<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../ajoutFilm.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Modifier un film</title>
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
                    <a href="{{route('Netflix.index')}}"><img src="../../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-4">
                    <form method="post" action="{{route('Netflix.updateFilm', ['film' => $film->id])}}" class="formulaireAjoutFilm">
                        @csrf
                        @method('PATCH')
                        <div>
                            <h2>Modifier un film</h2>
                            <input name="titre" type="text" class="form-control mb-3 mt-5" id="nomFilm" placeholder="Titre du film" name="titre" value="{{$film->titre}}">

                            <textarea type="text" name="resume" id="resumee" cols="30" rows="3" class="form-control mb-3" placeholder="Résumé">{{$film->resume}}</textarea>

                            <input type="text" class="form-control mb-3" id="duree" placeholder="Durée du film" name="duree" value="{{$film->duree}}">

                            <select class="form-control mb-3" name="realisateur_id">
                                <option value="{{$film->realisateur->id}}">{{$film->realisateur->nom}}</option>
                                @foreach ($realisateurs as $realisateurId => $realisateurNom)
                                    <option value="{{$realisateurId}}">{{$realisateurNom}}</option>
                                @endforeach
                            </select>

                            <select class="form-control mb-3" name="producteur_id">
                                <option value="{{$film->producteur->id}}">{{$film->producteur->nom}}</option>
                                @foreach ($producteurs as $producteurId => $producteurNom)
                                    <option value="{{$producteurId}}">{{$producteurNom}}</option>
                                @endforeach
                            </select>

                            <select class="form-control mb-3" name="acteur_id">
                                <option value="{{$film->acteur->id}}">{{$film->acteur->nom}}</option>
                                @foreach ($acteurs as $acteurId => $acteurNom)
                                    <option value="{{$acteurId}}">{{$acteurNom}}</option>
                                @endforeach
                            </select>

                            <input type="text" class="form-control mb-3" id="annee" placeholder="Année de sortie" name="annee" value="{{$film->annee}}">

                            <input type="text" class="form-control mb-3" id="cote" placeholder="Côte du film" name="cote" value="{{$film->cote}}">

                            <input type="text" class="form-control mb-3" id="categorie" placeholder="Catégorie" name="categorie" value="{{$film->categorie}}">

                            <input type="affiche" class="form-control mb-3" id="affiche" placeholder="Lien de l'affiche" name="affiche" value="{{$film->affiche}}">

                            <input type="text" class="form-control mb-3" id="bandeAnnonce" placeholder="Lien de la bande annonce" name="bandeAnnonce" value="{{$film->bandeAnnonce}}">
                        
                            <input type="number" class="form-control mb-3" id="audience" placeholder="Audience" name="audience" value="{{$film->audience}}">

                            <button type="submit" class="bouton form-control">Modifier</button>
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