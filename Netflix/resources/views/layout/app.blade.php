<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../netflix.css" />
    

    <title>@yield('title')</title>
  </head>
  <body>
  @if(session('success'))
    <div class="success">
        <h3>{{ session('success') }} <i class="fa-solid fa-circle-check" style="color: #44d930;"></i></h3>
    </div>
  @endif
    <!-- nav -->
    <div id="nav" class="nav">
      <img class="nav__logo" src="../images/Netflix-Logo.png" alt="" />
      <a href="{{route ('Netflix.index')}}" class="mot">Accueil</a>
      <a href="{{route ('Netflix.index')}}" class="icone"><i class="fa-solid fa-house" style="color: #ffffff;"></i></a>
      
      <a href="{{route ('Netflix.personne')}}" class="mot">Réalisateurs/producteurs</a>
      <a href="{{route ('Netflix.personne')}}" class="icone"><i class="fa-regular fa-address-book" style="color: #ffffff;"></i></a>

      <a href="{{route ('Netflix.acteur')}}" class="mot">Acteurs</a>
      <a href="{{route ('Netflix.acteur')}}" class="icone"><i class="fa-solid fa-person-falling-burst" style="color: #ffffff;"></i></a>
      

      @auth
        @if(Auth::user()->role == 'admin')
          <a href="{{route('Netflix.createFilm')}}" class="mot">Ajouter un film</a>
          <a href="{{route('Netflix.createFilm')}}" class="icone"><i class="fa-regular fa-file-video" style="color: #ffffff;"></i></a>

          <a href="{{route('Acteur.createActeur')}}" class="mot">Ajouter un acteur</a>
          <a href="{{route('Acteur.createActeur')}}" class="icone"><i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></a>

          <a href="{{route('Personne.createPersonnes')}}"  class="mot">Ajouter un réalisateurs/producteurs</a>
          <a href="{{route('Personne.createPersonnes')}}"  class="icone"><i class="fa-solid fa-person-circle-plus" style="color: #ffffff;"></i></a>

        @endif
      @endauth

      <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="deco mot" type="submit">Déconnexion</button>
          <button class="deco icone" type="submit"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></button>
      </form>
      <a href="{{route('Netflix.zoomUsager', [$usager] )}}"><img class="nav__avatar zoomP" src="{{$usager->profil}}" alt="Mon compte" /></a>
    </div>

    @yield('contenu')


    <footer></footer>
    
</body>
</html>