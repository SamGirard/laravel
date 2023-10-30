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
                <div class="col-md-8 offset-2 boiteZoom pb-5">
                    <div class="row">
                        <div class="col-md-12 videoBox">
                            <iframe class="trailer" src="{{$film->bandeAnnonce}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen autoplay></iframe>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-1 offset-11 p-0">
                            <a href="{{route ('Netflix.index')}}"><i class="fa-solid fa-xmark fa-2x" style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                <h1 class="titre ms-5">{{$film->titre}}</h1>
                <div class="row mb-5">
                    <div class="col-md-2">
                        <button class="form-control mt-2  ms-5"><i class="fa-solid fa-play" style="color: #1a1a1a;"></i> Lecture</button>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row">
                            <p class="m-0 ms-5"><span class="correspond">Correspond à 97 %</span> {{$film->annee}} <img src="../images/dolby2.png" class="dolby"></p>
                        </div>

                        <div class="row ms-5">
                            <p><span class="tv">TV-MA</span> Catégorie : {{$film->categorie}} </p>
                        </div>

                        <div class="row mt-3  ms-5">
                            <p>{{$film->resume}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <p><span class="infoTitre">Réalisateur et producteur : </span> {{$film->realisateur->nom}}, {{$film->producteur->nom}}</p>
                        </div>

                        <div class="row">
                            <p><span class="infoTitre">Cote : </span> {{$film->cote}}</p>
                        </div>

                        <div class="row">
                            <p><span class="infoTitre">Durée : </span> {{$film->duree}}</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           
        </div>
    
        <script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>

    </body>
</html>