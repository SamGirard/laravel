@extends('layout.formulaire')
    
    @section('title', "Se connecter")
    @section('contenu')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="../images/Logonetflix.png" class="mt-3 ms-5" height="60px" width="190px">
                </div>
            </div>
            <div class="row rowLogin">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 col-10 offset-xl-4 offset-lg-3 offset-md-3 offset-sm-3 offset-2">
                    <form method="post" action="{{route('login')}}" class="formulaireAjoutFilm">
                        @csrf
                        <div>
                            <h2>Ouvrir une session</h2>
                            <input name="email" type="text" class="form-control mb-3 mt-5" id="email" placeholder="Email ou nom d'utilisateur" name="email">

                            <input type="password" class="form-control mb-5" id="naissance" placeholder="Mot de passe" name="password">
                       
                            @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                            @endif

                            <button type="submit" class="bouton form-control">Ouvrir une session</button>
                            <p class="fois">Première fois sur Netflix? <a href="{{route('Register')}}" class="">Inscrivez-vous maintenant</a></p>
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
        @endsection
