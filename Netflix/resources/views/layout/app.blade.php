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
      <img class="nav__logo" src="../images/Netflix-Logo.png" alt="asfnsafasf" />
      <img class="nav__avatar" src="../images/netflix-avatar.png" alt="" />
    </div>

    <!-- header -->
    <header class="banner">
      <div class="banner__contents">
        <h1 class="banner__title">Money Heist</h1>
        <div class="banner__buttons">
          <button class="banner__button">Play</button>
          <button class="banner__button">My List</button>
        </div>
        <h1 class="banner__description">
          To carry out the biggest heist in history, a mysterious man called The Professor recruits
          a band of eight robbers who have a single characteristic: n...
        </h1>
      </div>
      <div class="banner--fadeBottom"></div>
    </header>


    @yield('contenu')


    <footer>Footer</footer>
    
</body>
</html>