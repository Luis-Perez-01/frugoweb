<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Frugo')</title>
  <link rel="icon" href="{{ asset('assets/favicon.ico') }}" />
  <link href="https://fonts.cdnfonts.com/css/black-jack" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/layoutStyle.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/dropdown.js') }}"></script>
</head>

<body>
  <style>
    .dropdown-toggle::after {
      content: none;
    }
  </style>
  <nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome', app()->getLocale()) }}"><img
          src="{{ asset('assets/logo.png') }}" class="img-fluid mx-auto pt-3" alt="..."
          style="padding-left: 6rem;" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarCenteredExample">
        <ul class="navbar-nav mb-2 mb-lg-0 text-uppercase d-flex gap-5 w-50" style="font-size: 0.8rem; font-weight: 800;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" id="navbarDropdownMenuLink" style="color: #000000">
              <strong>{{ __('layout.Acerca') }}<br>{{ __('layout.Acerca1') }}</strong>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="drpI"><a class="dropdown-item"
                  href="{{ route('historia', app()->getLocale()) }}">{{ __('layout.Historia') }}</a></li>
              <li><a class="dropdown-item"
                  href="{{ route('historia', app()->getLocale()) }}#presencia">{{ __('layout.Presencia') }}</a></li>
              <li><a class="dropdown-item"
                  href="{{ route('historia', app()->getLocale()) }}#equipo"">{{ __('layout.Equipo') }}</a></li>
              <li><a class="dropdown-item"
                  href="{{ route('historia', app()->getLocale()) }}#filosofia"">{{ __('layout.Filosofia') }}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="{{ route('productos', app()->getLocale()) }}"><strong>{{ __('layout.Productos') }}<br>{{ __('layout.Productos1') }}</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" id="navbarDropdownMenuLink" style="color: #000000">
              <strong>{{ __('layout.Calidad') }}<br>{{ __('layout.Calidad1') }}</strong>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="drpI"><a class="dropdown-item"
                  href="{{ route('calidad', app()->getLocale()) }}">{{ __('layout.Certificaciones') }}</a></li>
              <li><a class="dropdown-item"
                  href="{{ route('calidad', app()->getLocale()) }}#agricultura">{{ __('layout.Agricultura') }}</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="nav-item d-flex gap-2 pl-3 py-3">
          <a href="{{ route(Route::currentRouteName(), 'en') }}"><i class="flag flag-united-states"></i></a>
          <a href="{{ route(Route::currentRouteName(), 'es') }}"><i class="flag flag-mexico"></i></a>
        </div>
        <div class="btnNav d-flex align-items-start gap-2 py-3">
          <a href="{{ route('unete', app()->getLocale()) }}" class="nav-link rounded-circle p-2"><i
              class='bx bxs-group bx-sm'></i></a>
          <a href="{{ route('contacto', app()->getLocale()) }}" class="nav-link rounded-circle p-2"><i
              class='bx bx-envelope bx-sm'></i></a>
        </div>
      </div>
    </div>
  </nav>
  @section('content')
  @show




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
