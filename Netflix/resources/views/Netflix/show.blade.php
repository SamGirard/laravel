<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netflix - {{$film->titre}}</title>
        <link rel="stylesheet" href="../zoomFilm.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="zoomFilm">

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-6 offset-3 boiteZoom pb-5">
                <div class="row">
                    <div class="col-md-12 videoBox" style="position: relative;">
                        <iframe class="trailer" src="{{$film->bandeAnnonce}}?autoplay=1&mute=1&controls=0&showinfo=0&rel=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="1" fs="1" autoplay ></iframe>
                        <div style="position: absolute; top: 0; right: 0;">
                            <a href="{{ route('Netflix.index') }}"><i class="fa-solid fa-xmark fa-2x mt-3 me-3 X"></i></a>
                        </div>
                        <div class="position-absolute bottom-0 left-0">
                            <h1 class="titre ms-5">{{$film->titre}}</h1>
                            <!-- Ajoutez votre bouton ici -->
                            <button class="form-control mt-2 mb-5 ms-5 lecture"><i class="fa-solid fa-play"></i> Lecture</button>
                        </div>
                     </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-8">
                        <div class="row">
                            <p class="ms-5"><span class="correspond">Correspond à 97 %</span> {{$film->annee}} <img src="../images/dolby2.png" class="dolby"></p>
                        </div>

                        <div class="row ms-5">
                            <p><span class="tv">TV-MA</span> Catégorie : {{$film->categorie}} </p>
                        </div>

                        <div class="row mt-3  ms-5">
                            <p>{{$film->resume}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <p><span class="infoTitre">Réalisateur et producteur : </span> <a class="aPersonne" href="{{route('Netflix.zoom', [$film->realisateur]) }}">{{$film->realisateur->nom}}</a>, <a  class="aPersonne" href="{{route('Netflix.zoom', [$film->producteur]) }}">{{$film->producteur->nom}}</a></p>
                        </div>

                        <div class="row">
                            <p><span class="infoTitre">Acteur : </span> <a class="aPersonne" href="{{route('Netflix.zoomActeur', [$film->acteur]) }}">{{$film->acteur->nom}}</a></p>
                        </div>

                        <div class="row">
                            <p><span class="infoTitre">Cote : </span> {{$film->cote}}</p>
                        </div>

                        <div class="row">
                            <p><span class="infoTitre">Durée : </span> {{$film->duree}}</p>
                        </div>
                        <div class="row">
                            <a href="{{route('Netflix.modifierFilm', [$film])}}"><p>Modifier</p></a>
                        </div>
                        <div class="row">
                            <a href=""><p>Modifier</p></a>
                        </div>
                    </div>
                </div>
                <div class="rowFilm mt-5">
                    <h2>Suggestions</h2>
                    <div class="row__posters">

                    </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>

    </body>
</html>