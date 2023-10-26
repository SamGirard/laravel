    @extends('layout.app')
    
    @section('title', "Page d'accueil")

    @section('contenu')
    <!-- Netflix Originals -->
    <div class="row">
      <h2>Les Classiques</h2>
      <div class="row__posters">

        @if(count($classics))
            @foreach($classics as $classic)
                <a href="{{route('Netflix.show', [$classic] )}}" ><img src="{{$classic->affiche}}" class="row__poster row__posterLarge" width="200px" height="400px"></a>
                <!--<h4>{{$classic->realisateur->nom}}</h4>-->
            @endforeach
        @else

        @endif
      </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
      <h2>Tendances Actuelles</h2>
      <div class="row__posters">
          @if(count($tendances))
                @foreach($tendances as $tendance)
                    <img class="row__poster row__posterLarge" src="{{$tendance->affiche}}">
                @endforeach
            @else

            @endif
      </div>
    </div>

    <!-- Top Rated -->
    <div class="row">
      <h2>À Revoir en Boucle</h2>
      <div class="row__posters">
        @if(count($revoirs))
                  @foreach($revoirs as $revoir)
                      <img class="row__poster row__posterLarge" src="{{$revoir->affiche}}" width="200px" height="400px">
                  @endforeach
              @else

              @endif
      </div>
    </div>

    <div class="row">
      <h2>Film Spécial Tanrantino</h2>
      <div class="row__posters">
          @if(count($revoirs))
                  @foreach($tarantinos as $tarantino)
                      <img class="row__poster row__posterLarge" src="{{$tarantino->affiche}}" width="200px" height="400px">
                  @endforeach
              @else

              @endif
      </div>
    </div>

    <div class="row">
      <h2>Année 90</h2>
      <div class="row__posters">
          @if(count($siecles))
                  @foreach($siecles as $siecle)
                      <img class="row__poster row__posterLarge" src="{{$siecle->affiche}}" width="200px" height="400px">
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