@extends('layout.app')
    
    @section('title', "Netflix - Acteurs")

    @section('contenu')
    @auth
    
    <h1 class="sexe">Hommes</h1>
    <div class="row">
      <div class="row__posterss">
        @if(count($hommes))
          @foreach($hommes as $homme)
            <div class="card" >
              <a href="{{route('Netflix.zoomActeur', [$homme]) }}">
                <img src="{{$homme->portrait}}" class="card-img-top row_poster row_posterLarge">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$homme->nom}}</h5>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>

  <h1 class="sexe">Femmes</h1>
  <div class="row">
    <div class="row__posterss">
      @if(count($femmes))
        @foreach($femmes as $femme)
          <div class="card" >
            <a href="{{route('Netflix.zoomActeur', [$femme]) }}">
              <img src="{{$femme->portrait}}" class="card-img-top row_poster row_posterLarge">
            </a>
            <div class="card-body">
              <h3 class="card-title">{{$femme->nom}}</h5>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>

  <h1 class="sexe">Autre</h1>
  <div class="row">
    <div class="row__posterss">
      @if(count($autres))
        @foreach($autres as $autre)
          <div class="card" >
            <a href="{{route('Netflix.zoomActeur', [$autre]) }}">
              <img src="{{$autre->portrait}}" class="card-img-top row_poster row_posterLarge">
            </a>
            <div class="card-body">
              <h3 class="card-title">{{$autre->nom}}</h5>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>

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
</body>
</html>