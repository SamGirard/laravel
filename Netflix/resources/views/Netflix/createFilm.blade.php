<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ajoutFilm.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Ajout d'un film</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-4">
                    <form method="post" action="{{route('Netflix.store')}}" class="formulaireAjoutFilm">
                        @csrf
                        <div>
                            <h2>Ajouter un film</h2>
                            <input type="text" class="form-control mb-3 mt-5" id="nomFilm" placeholder="Titre du film" name="titre">

                            <textarea name="resumer" cols="30" rows="3" class="form-control mb-3" placeholder="Résumé"></textarea>

                            <input type="text" class="form-control mb-3" id="duree" placeholder="Durée du film" name="duree">

                            <select class="form-control mb-3" name="realisateur">
                                <option value="">Réalisateur</option>
                            </select>

                            <select class="form-control mb-3" name="producteur">
                                <option value="">Producteur</option>
                            </select>

                            <select class="form-control mb-3" name="acteur">
                                <option value="">Acteur principal</option>
                            </select>

                            <input type="date" class="form-control mb-3" id="date" placeholder="Date" name="date">

                            <input type="text" class="form-control mb-3" id="cote" placeholder="Côte du film" name="cote">

                            <input type="text" class="form-control mb-3" id="categorie" placeholder="Catégorie" name="categorie">

                            <input type="text" class="form-control mb-3" id="bandeAnnonce" placeholder="Lien de la bande annonce" name="bandeAnnonce">
                        
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