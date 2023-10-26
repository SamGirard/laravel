<!DOCTYPE html>
<html lang="en">
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


    @yield('contenu')


    <footer>Footer</footer>
    
</body>
</html>