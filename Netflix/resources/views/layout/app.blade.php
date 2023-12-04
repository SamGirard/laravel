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
      <a href="{{route ('Netflix.index')}}">Accueil</a>
      <a href="{{route ('Netflix.personne')}}">Réalisateurs/producteurs</a>
      <a href="{{route ('Netflix.acteur')}}">Acteurs</a>
      

      @auth
        @if(Auth::user()->role == 'admin')
          <a href="{{route('Netflix.createFilm')}}">Ajouter un film</a>
          <a href="{{route('Acteur.createActeur')}}">Ajouter un acteur</a>
          <a href="{{route('Personne.createPersonnes')}}">Ajouter un réalisateurs/producteurs</a>
        @endif
      @endauth

      <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="deco" type="submit">Déconnexion</button>
      </form>
      
    </div>

    @yield('contenu')


    <footer></footer>
    
</body>
</html>