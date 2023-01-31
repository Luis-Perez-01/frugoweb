<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Frugo')</title>
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" />
    <link href="https://fonts.cdnfonts.com/css/black-jack" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layoutStyle.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('assets/logo.png')}}" class="img-fluid mx-auto pt-3" alt="..." style="padding-left: 6rem;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Acerca <br> de Frugo</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/historia') }}">Historia</a></li>
                            <li><a class="dropdown-item" href="#">Presencia</a></li>
                            <li><a class="dropdown-item" href="#">Nuestro Equipo</a></li>
                            <li><a class="dropdown-item" href="#">Nuestra Filosofía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong>Nuestros <br> Productos</strong></a>
                    </li>
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>La calidad <br> nos distingue</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Certificaciones</a></li>
                            <li><a class="dropdown-item" href="#">Agrícultura</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-3">
                    </li>

                </ul>
                <div class="btnNav">
                    <a href="" class="text-center"><i class='bx bxs-group bx-sm'></i></a>
                    <a href="" class="text-center"><i class='bx bx-envelope bx-sm'></i></a>
                </div>
            </div>
        </div>
    </nav>
    @section('content')
    @show


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>