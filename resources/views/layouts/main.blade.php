<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

         <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--CSS do projeto -->
    <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <header class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <a href="/" class="navbar-brand">
              <img src="/img/laravel_logo.png" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="/cadastrar" class="nav-link">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a href="/equipamentos" class="nav-link">Equipamentos</a>
              </li>
            </ul>
            </div>
          </nav>
        </header>

        @yield('content')        
        <footer class="text-center mt-5">
            <p>App-Laravel &copy;2022</p>
        </footer>
       
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
