@extends('layout.formulaire')
    
    @section('title', "Créer un compte")
    @auth
    @section('contenu')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{route('Netflix.index')}}"><img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6 offset-xl-4 offset-lg-3 offset-4">
                    <form method="post" action="{{route('Usager.store')}}" class="formulaireAjoutFilm" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="mb-5 text-center">Se créer un compte</h2>
                            </div>
                            <div>
                                <label class="text-light">Nom</label>
                                <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('nom')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Prénom</label>
                                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('prenom')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Nom d'usager</label>
                                <input type="text" class="form-control" id="lieu" placeholder="Nom d'usager" name="nomUsager">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('nomUsager')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Image de profil</label>
                                <input type="file" class="form-control" id="profil" name="profil">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('profil')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Type de compte</label>
                                <Select class="type form-control">
                                    <option value="normal">Normal</option>
                                    <option value="kid">Enfant</option>
                                </Select>
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('type')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('email')}}</div>
                                @endif
                                <br>
                            </div>

                            <div>
                            <label class="text-light">Mot de passe</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd">
                                @if(isset($errors) && $errors->any())
                                    <div class="text-danger">{{$errors->first('pwd')}}</div>
                                @endif
                                <br>
                            </div>

                            <button type="submit" class="bouton form-control">Créer un compte</button>
                            <p class="fois">Déja un compte? <a href="{{route('login')}}">Connecter-vous.</a></p>
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