<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>gameland</title>
      @vite(['resources/js/app.js', 'resources/css/app.css'])
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-controller"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link 
              @if (Route::currentRouteName() == 'homepage')
                active
              @endif
              " aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link
              @if (Route::currentRouteName() == 'aboutUs')
                active
              @endif
              " href="{{route('aboutUs')}}">Chi Siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link
              @if (Route::currentRouteName() == 'contatti')
                active
              @endif
              " href="{{route('contatti')}}">Contatti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link
              @if (Route::currentRouteName() == 'prodotti')
                active
              @endif
              " href="{{route('prodotti')}}">Prodotti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{$slot}}
  </body>
</html>