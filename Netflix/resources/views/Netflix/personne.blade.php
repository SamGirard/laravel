    @extends('layout.layoutP')
    
    @section('title', "Page d'accueil")

    @section('contenu')
    <div class="row">
        <div class="row__posterss">
            @if(count($personnes))
                @foreach($personnes as $personne)
                    <div class="image-container">
                      <a href="{{route('Netflix.zoom', [$personne]) }}">
                        <img src="{{$personne->portrait}}" class="row__poster row__posterLarge portrait" width="200px" height="400px">
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
    @endsection
</body>
</html>