@extends('layout.formulaire')
    
    @section('title', "Modifier un réalisateur ou producteur")
    @auth
    @section('contenu')

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
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 col-10 offset-xl-4 offset-lg-3 offset-md-3 offset-sm-3 offset-2">
                    <form method="post" action="{{route('Netflix.updatePersonne', ['personne' => $personne->id])}}" class="formulaireAjoutFilm" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div>
                            <h2>Ajouter un réalisateur ou un producteur</h2>
                            <input name="nom" type="text" class="form-control mb-3 mt-5" id="nomFilm" placeholder="Nom" name="nom" value="{{$personne->nom}}">

                            <input type="text" class="form-control mb-3" id="naissance" placeholder="Date de naissance" name="dateNaissance" value="{{$personne->dateNaissance}}">

                            <input type="text" class="form-control mb-3" id="lieu" placeholder="Lieu de naissance" name="lieuNaissance" value="{{$personne->lieuNaissance}}">

                            <input type="file" class="form-control mb-3" id="portrait" placeholder="Portrait" name="portrait" value="{{$personne->portrait}}">

                            <input type="text" class="form-control mb-3" id="age" placeholder="Âge" name="age" value="{{$personne->age}}">
                       
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
        @endauth

@endsection