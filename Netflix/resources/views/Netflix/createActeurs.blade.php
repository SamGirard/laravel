@extends('layout.formulaire')
    
    @section('title', "Ajouter un acteur")
    @auth
    @section('contenu')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('Netflix.index')}}"><img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 col-10 offset-xl-4 offset-lg-3 offset-md-3 offset-sm-3 offset-2">
                    <form method="post" action="{{route('Acteur.store')}}" class="formulaireAjoutFilm" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="text-center">Ajouter un acteur</h2>
                            </div>

                            <div>
                            <label class="text-light">Nom</label>
                                <input name="nom" type="text" class="form-control" id="nomFilm" placeholder="Nom complet" name="nom" value="{{ old('nom') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('nom')}}</div>        
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Date de naissance</label>
                                <input type="text" class="form-control" id="naissance" placeholder="Date de naissance" name="dateNaissance" value="{{ old('dateNaissance') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('dateNaissance')}}</div>        
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Lieu de naissance</label>
                                <input type="text" class="form-control" id="lieu" placeholder="Lieu de naissance" name="lieuNaissance" value="{{ old('lieuNaissance') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('lieuNaissance')}}</div>        
                                @endif
                                <br>
                            </div>

                            <label class="text-light">Sélectionner l'image</label>
                                <input type="file" class="form-control file upload" id="portrait" placeholder="Portrait" name="portrait" value="{{ old('portrait') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('portrait')}}</div>        
                                @endif
                                <br>

                            <div>
                            <label class="text-light">Âge</label>
                                <input type="text" class="form-control" id="age" placeholder="Âge" name="age" value="{{ old('age') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('age')}}</div>        
                                @endif
                                <br>
                            </div>

                            <div>
                                <label class="text-light">Sexe</label>
                                <Select class="form-control mb-3" name="sexe">
                                    <option value="H">Homme</option>
                                    <option value="F">Femme</option>
                                    <option value="A">Autre</option>
                                </Select>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('sexe')}}</div>        
                                @endif
                            </div>
                            
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
        @endauth

@endsection