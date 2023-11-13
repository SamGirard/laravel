    @extends('layout.app')
    
    @section('title', "Netflix - Réalisateurs")

    @section('contenu')
    @auth
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
            @else
            @endif
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