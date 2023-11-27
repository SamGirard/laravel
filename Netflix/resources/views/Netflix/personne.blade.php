    @extends('layout.app')
    
    @section('title', "Netflix - Réalisateurs")

    @section('contenu')
    @auth

    <!--
      L'ancien format en forme de boule
    <div class="row">
      <div class="row__posterss">
        @if(count($personnes))
          @foreach($personnes as $personne)
            <div class="image-container">
              <a href="{{route('Netflix.zoom', [$personne]) }}">
                <img src="{{$personne->portrait}}" class="row_poster row_posterLarge portrait">
              </a>
                  <h3 class="cNom">{{$personne->nom}}</h3>    
            </div>
          @endforeach
        @endif
      </div>
    </div>
  -->

  <!--
  <div class="row">
    <div class="row__posterss">
      @if(count($personnes))
        @foreach($personnes as $personne)
          <div class="card" >
            <a href="{{route('Netflix.zoom', [$personne]) }}">
              <img src="{{$personne->portrait}}" class="card-img-top row_poster row_posterLarge">
            </a>
            <div class="card-body">
              <h3 class="card-title cNomPersonne">{{$personne->nom}}</h5>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
  -->

  <div class="row">
    <h2>Hommes</h2>
    <div class="row_colonne">
      <div class="scrollMenu">
          @if(count($hommes))
            @foreach($hommes as $homme)
            <div class="card" >
              <a href="{{route('Netflix.zoom', [$homme]) }}">
                <img src="{{$homme->portrait}}" class="card-img-top row_poster row_posterLarge">
              </a>
              <div class="card-body">
                <h3 class="card-title cNomPersonne">{{$homme->nom}}</h5>
              </div>
            </div>
            @endforeach
          @endif
      </div>
    </div>
  </div>
  



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
</body>
</html>