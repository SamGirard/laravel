    @extends('layout.app')
    
    @section('title', "Netflix accueil")
    <!-- header -->
    <header class="banner">
      <div class="banner__contents">
        <h1 class="banner__title">La Casa de Papel</h1>
        <div class="banner__buttons">
          <button class="banner__button">Lecture</button>
          <button class="banner__button">Ma Liste</button>
        </div>
        <h1 class="banner__description">
        Huit voleurs mènent une prise d'otage dans la Maison royale de la Monnaie d'Espagne, tandis qu'un génie criminel manipule la police pour mettre son plan à exécution.
        </h1>
      </div>
      <div class="banner--fadeBottom">
      </div>
    </header>
    
    @section('contenu')
    <!-- Netflix Originals -->
    <div class="row">
      <h2>Les Classiques</h2>
      <div class="row_colonne">

        @if(count($classics))
            @foreach($classics as $classic)
                <a href="{{route('Netflix.show', [$classic] )}}" >
                  <img src="{{$classic->affiche}}" class="row_poster row_posterLarge">
                </a>
                <!--<h4>{{$classic->realisateur->nom}}</h4>-->
            @endforeach
        @else

        @endif
      </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
      <h2>Tendances Actuelles</h2>
      <div class="row_colonne">

          @if(count($tendances))
                @foreach($tendances as $tendance)
                    <a href="{{route('Netflix.show', [$tendance] )}}"><img src="{{$tendance->affiche}}" class="row_poster row_posterLarge" src="{{$tendance->affiche}}"></a>
                @endforeach
            @else

            @endif
      </div>
    </div>

    <!-- Top Rated -->
    <div class="row">
      <h2>À Revoir en Boucle</h2>

      <div class="row_colonne">
        @if(count($revoirs))
                  @foreach($revoirs as $revoir)
                      <a href="{{route('Netflix.show', [$revoir] )}}"><img src="{{$revoir->affiche}}" class="row_poster row_posterLarge" src="{{$revoir->affiche}}"></a>
                  @endforeach
              @else

              @endif
      </div>
    </div>

    <div class="row">
      <h2>Film Spécial Tanrantino</h2>
      <div class="row_colonne">

          @if(count($revoirs))
                  @foreach($tarantinos as $tarantino)
                      <a href="{{route('Netflix.show', [$tarantino] )}}"><img src="{{$tarantino->affiche}}" class="row_poster row_posterLarge" src="{{$tarantino->affiche}}"></a>
                  @endforeach
              @else

              @endif
      </div>
    </div>

    <div class="row">
      <h2>Année 90</h2>
      <div class="row_colonne">

          @if(count($siecles))
                  @foreach($siecles as $siecle)
                      <a href="{{route('Netflix.show', [$siecle] )}}"><img src="{{$siecle->affiche}}" class="row_poster row_posterLarge" src="{{$siecle->affiche}}"></a>
                  @endforeach
              @else

              @endif
      </div>
    </div>
<!---->


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
    @endsection