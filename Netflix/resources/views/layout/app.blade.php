<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="netflix.css" />
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- nav -->
    <div id="nav" class="nav">
      <img class="nav__logo" src="../images/Netflix-Logo.png" alt="" />
      <a href="{{route ('Netflix.index')}}">Accueil</a>
      <a href="{{route ('Netflix.personne')}}">Acteurs</a>
      <img class="nav__avatar" src="../images/netflix-avatar.png" alt="" />
    </div>

    @yield('contenu')


    <footer>Footer</footer>
    
</body>
</html>