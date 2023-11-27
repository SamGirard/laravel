    @extends('layout.app')
    
    @section('title', "Netflix - Accueil")
    @auth
    <!-- header -->

    <a href="{{route('Netflix.show', ['film' => 32]) }}" class="aBanner"><header class="banner">
    <header>
      <div class="banner__contents">
        <h1 class="banner__title">La Casa de Papel</h1>
        <div class="banner__buttons">
          <a href="https://www.youtube.com/watch?v=_InqQJRqGW4&embeds_referring_euri=https%3A%2F%2Fwww.bing.com%2F&embeds_referring_origin=https%3A%2F%2Fwww.bing.com&source_ve_path=Mjg2NjY&feature=emb_logo"><button class="banner__button">Lecture</button></a>
        </div>
        <h1 class="banner__description">
        Huit voleurs mènent une prise d'otage dans la Maison royale de la Monnaie d'Espagne, tandis qu'un génie criminel manipule la police pour mettre son plan à exécution.
        </h1>
      </div>
      <div class="banner--fadeBottom">
      </div>
    </header>
    </a>
    @section('contenu')
    <!-- Netflix Originals -->
    <div class="row">
      <h2>Les Classiques</h2>
      <div class="row_colonne">
      <div class="scrollMenu">
        @if(count($classics))
            @foreach($classics as $classic)
            @if(Auth::check() && Auth::user()->role == 'kid' && $classic->audience < 18)
            <!--<i style="position: absolute; z-index: 1; margin: 5px 0px 0px 5px;" class="pluss fa-solid fa-plus fa-2x" style="color: #363636;"></i>-->
            <a href="{{route('Netflix.show', [$classic] )}}" >
                <img src="{{$classic->affiche}}" class="row_poster row_posterLarge">
            </a>
            @elseif(Auth::check() && Auth::user()->role != 'kid')
            <a href="{{route('Netflix.show', [$classic] )}}" >
                <img src="{{$classic->affiche}}" class="row_poster row_posterLarge">
            </a>

            @endif


            @endforeach
        @else

        @endif
        </div>
      </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
      <h2>Tendances Actuelles</h2>
      <div class="row_colonne">
        <div class="scrollMenu">
          @if(count($tendances))
            @foreach($tendances as $tendance)
              @if(Auth::check() && Auth::user()->role == 'kid' && $tendance->audience < 18)

                <a href="{{route('Netflix.show', [$tendance] )}}"><img src="{{$tendance->affiche}}" class="row_poster row_posterLarge" src="{{$tendance->affiche}}"></a>
                    
              @elseif(Auth::check() && Auth::user()->role != 'kid')
                <a href="{{route('Netflix.show', [$tendance] )}}"><img src="{{$tendance->affiche}}" class="row_poster row_posterLarge" src="{{$tendance->affiche}}"></a>

              @endif

            @endforeach
          @endif
          </div>
      </div>
    </div>

    <!-- Top Rated -->
    <div class="row">
      <h2>À Revoir en Boucle</h2>

      <div class="row_colonne">
      <div class="scrollMenu">
        @if(count($revoirs))
                  @foreach($revoirs as $revoir)
                  @if(Auth::check() && Auth::user()->role == 'kid' && $revoir->audience < 18)

                      <a href="{{route('Netflix.show', [$revoir] )}}"><img src="{{$revoir->affiche}}" class="row_poster row_posterLarge" src="{{$revoir->affiche}}"></a>
                      @elseif(Auth::check() && Auth::user()->role != 'kid')
                      <a href="{{route('Netflix.show', [$revoir] )}}"><img src="{{$revoir->affiche}}" class="row_poster row_posterLarge" src="{{$revoir->affiche}}"></a>

                      @endif

                  @endforeach
              @else

              @endif
              </div> 
      </div>
    </div>
    
    @if(Auth::check() && Auth::user()->role != 'kid')
      <div class="row">
        <h2>Film Spécial Tanrantino</h2>
        <div class="row_colonne">
        <div class="scrollMenu">
            @if(count($revoirs))
                    @foreach($tarantinos as $tarantino)
                        <a href="{{route('Netflix.show', [$tarantino] )}}"><img src="{{$tarantino->affiche}}" class="row_poster row_posterLarge" src="{{$tarantino->affiche}}"></a>
                    @endforeach
                @else

                @endif
                </div> 
        </div>
      </div>
    @endif

    <div class="row">
      <h2>Année 90</h2>
      <div class="row_colonne">
      <div class="scrollMenu">
          @if(count($siecles))
                    @foreach($siecles as $siecle)
                        @if(Auth::check() && Auth::user()->role == 'kid' && $siecle->audience < 18)
                            <a href="{{route('Netflix.show', [$siecle] )}}">
                                <img src="{{$siecle->affiche}}" class="row_poster row_posterLarge">
                            </a>
                        @elseif(Auth::check() && Auth::user()->role != 'kid')
                        <a href="{{route('Netflix.show', [$siecle] )}}">
                                <img src="{{$siecle->affiche}}" class="row_poster row_posterLarge">
                            </a>
                        @endif
                    @endforeach
                @else
                @endif
              </div>
      </div>
    </div>

    <div class="row">
      
            @if(count($autres))
            <div class="scrollMenu">
            <h2>Autres</h2>
            <div class="row_colonne">
                    @foreach($autres as $autre)
                    @if(Auth::check() && Auth::user()->role == 'kid' && $autre->audience < 18)
                        <a href="{{route('Netflix.show', [$autre] )}}"><img src="{{$autre->affiche}}" class="row_poster row_posterLarge" src="{{$autre->affiche}}"></a>
                        
                        @elseif(Auth::check() && Auth::user()->role != 'kid')
                        <a href="{{route('Netflix.show', [$autre] )}}"><img src="{{$autre->affiche}}" class="row_poster row_posterLarge" src="{{$autre->affiche}}"></a>

                        @endif

                    @endforeach
                @else

                @endif
                </div>
      </div>
    </div>
<!---->

<script src="https://kit.fontawesome.com/2ad1095675.js" crossorigin="anonymous"></script>

    <script>
      const nav = document.getElementById('nav');
      window.addEventListener('scroll', () => {
        if (window.scrollY >= 100) {
          nav.classList.add('nav__black');
        } else {
          nav.classList.remove('nav__black');
        }
      });
    </script>
    @else
    <h1>Veuillez vous connecter!</h1>
    <a href="{{route('login')}}" class="btn btn-primary">Page de connexion</a>  
    @endauth

    @endsection