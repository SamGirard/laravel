    @extends('layout.app')
    
    @section('title', "Page d'accueil")

    @section('contenu')
    <!-- Netflix Originals -->
    <div class="row">
      <h2>Les Classiques</h2>
      <a href="{{route('Netflix.film')}}">Voir plus de film</a>
      <div class="row__posters">

        @if(count($films))
            @foreach($films as $film)
                <img class="row__poster row__posterLarge" src="{{$film->affiche}}" width="200px" height="400px">
            @endforeach
        @else

        @endif
      </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
      <h2>Trending Now</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>

    <!-- Top Rated -->
    <div class="row">
      <h2>Top Rated</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>
<!--
    Action Movies 
    <div class="row">
      <h2>Action Movies</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>

    Comedy Movies 
    <div class="row">
      <h2>Comedy Movies</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>

     Horror Movies 
    <div class="row">
      <h2>Horror Movies</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>

    Romance Movies
    <div class="row">
      <h2>Romance Movies</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>

     Documentaries
    <div class="row">
      <h2>Documentaries</h2>
      <div class="row__posters">
        <img class="row__poster" src="images/small-movie1.jpg" alt="" />

        <img class="row__poster" src="images/small-movie2.jpg" alt="" />

        <img class="row__poster" src="images/small-movie3.jpg" alt="" />

        <img class="row__poster" src="images/small-movie4.jpg" alt="" />

        <img class="row__poster" src="images/small-movie5.jpg" alt="" />

        <img class="row__poster" src="images/small-movie6.jpg" alt="" />

        <img class="row__poster" src="images/small-movie7.jpg" alt="" />

        <img class="row__poster" src="images/small-movie8.jpg" alt="" />
      </div>
    </div>
    -->


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