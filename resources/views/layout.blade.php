<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frugo | @yield('title', 'Frugo')</title>
    <link href="https://fonts.cdnfonts.com/css/black-jack" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Frugo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de Frugo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Historia</a></li>
                            <li><a class="dropdown-item" href="#">Presencia</a></li>
                            <li><a class="dropdown-item" href="#">Nuestro Equipo</a></li>
                            <li><a class="dropdown-item" href="#">Nuestra Filosofía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Nuestros Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            La calidad nos distingue
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Certificaciones</a></li>
                            <li><a class="dropdown-item" href="#">Agrícultura</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0">
        <img src="{{URL::asset('assets/bg-home-vfinal.png')}}" class="d-block w-100" alt="..." />
        <div class="text-center" style="position: absolute; top: 500px; left: 0; right: 0; margin: auto;">
            <span style="color: #3FAE29; font-family: BlackJack; font-weight: 100; font-size: 40px;">Vive bien come lo mejor</span>
            <img src="{{URL::asset('assets/scribble.png')}}" class="img-fluid mx-auto" alt="..." />
        </div>
    </div>

    @section('content')
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>