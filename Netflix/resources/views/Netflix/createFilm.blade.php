@extends('layout.formulaire')
    
    @section('title', "Ajouter un film")
    @auth
    @section('contenu')
        <!--@if(isset($errors) && $errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
        @endif-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('Netflix.index')}}"><img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 col-10 offset-xl-4 offset-lg-3 offset-md-3 offset-sm-3 offset-2">
                    <form method="post" action="{{route('Netflix.store')}}" class="formulaireAjoutFilm" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="text-center">Ajouter un film</h2>
                            </div>

                            <div>
                            <label class="text-light">Titre</label>
                                <input name="titre" type="text" class="form-control" id="nomFilm" placeholder="Titre du film" name="titre" value="{{ old('titre') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('titre')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Résumé</label>
                                <textarea type="text" name="resume" id="resumee" cols="30" rows="3" class="form-control" placeholder="Résumé">{{ old('resume') }}</textarea>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('resume')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Durée</label>
                                <input type="text" class="form-control" id="duree" placeholder="Durée du film" name="duree" value="{{ old('duree') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('duree')}}</div>
                                @endif
                                <br>
                            </div>
                            
                            <div>
                            <label class="text-light">Réalisateur</label>
                                <select class="form-control" name="realisateur_id">
                                    <option value="">Réalisateur</option>
                                    @foreach ($realisateurs as $realisateurId => $realisateurNom)
                                        <option value="{{$realisateurId}}" @if(old('realisateur_id') == $realisateurId) selected @endif>{{$realisateurNom}}</option>
                                    @endforeach
                                </select>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('realisateur_id')}}</div>
                                @endif
                                <br>
                            </div>


                            <div>
                            <label class="text-light">Producteur</label>
                                <select class="form-control" name="producteur_id">
                                    <option value="">Producteur</option>
                                    @foreach ($producteurs as $producteurId => $producteurNom)
                                        <option value="{{$producteurId}}" @if(old('producteur_id') == $producteurId) selected @endif>{{$producteurNom}}</option>
                                    @endforeach
                                </select>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('producteur_id')}}</div>
                                @endif
                                <br>
                            </div>


                            <div>
                            <label class="text-light">Acteur</label>
                                <select class="form-control" name="acteur_id">
                                    <option value="">Acteur principal</option>
                                    @foreach ($acteurs as $acteurId => $acteurNom)
                                        <option value="{{$acteurId}}" @if(old('acteur_id') == $acteurId) selected @endif>{{$acteurNom}}</option>
                                    @endforeach
                                </select>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('acteur_id')}}</div>
                                @endif
                                <br>
                            </div>


                            <div>
                            <label class="text-light">Année</label>
                                <input type="text" class="form-control" id="annee" placeholder="Année de sortie" name="annee" value="{{ old('annee') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('annee')}}</div>
                                @endif
                                <br>
                            </div>
                            

                            <div>
                            <label class="text-light">Côte</label>
                                <input type="text" class="form-control" id="cote" placeholder="Côte du film" name="cote" value="{{ old('cote') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('cote')}}</div>
                                @endif
                                <br>
                            </div>
                            

                            <div>
                            <label class="text-light">Catégorie</label>
                                <input type="text" class="form-control" id="categorie" placeholder="Catégorie" name="categorie" value="{{ old('categorie') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('categorie')}}</div>
                                @endif
                                <br>
                            </div>
                            
                            <div>
                            <label class="text-light">Affiche</label>
                                <input type="file" class="form-control" id="affiche" placeholder="Lien de l'affiche" name="affiche" value="{{ old('affiche') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('affiche')}}</div>
                                @endif
                                <br>
                            </div>
                            

                            <div>
                            <label class="text-light">Bande annonce</label>
                                <input type="text" class="form-control" id="bandeAnnonce" placeholder="Lien de la bande annonce" name="bandeAnnonce" value="{{ old('bandeAnnonce') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('bandeAnnonce')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Audience</label>
                                <input type="number" class="form-control" id="audience" placeholder="Audience" name="audience" value="{{ old('audience') }}">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('audience')}}</div>
                                @endif
                                <br>
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