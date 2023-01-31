@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
</head>

<body>
    @section('content')
    <div class="container-fluid p-0">
        <img src="{{asset('assets/bg-home-vfinal.png')}}" class="img-fluid w-100" alt="..." />
        <div class="text-center" style="position: absolute; top: 35rem; left: 0; right: 0; margin: auto;">
            <span style="color: #3FAE29; font-family: BlackJack; font-weight: 100; font-size: 40px;">Vive bien come lo mejor</span>
            <img src="{{asset('assets/scribble.png')}}" class="img-fluid mx-auto" alt="..." />
        </div>
    </div>
    <section>
        <div class="container" style="position: absolute; top: 45rem; left: 0; right: 0; margin: auto;">
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead">En Frugo nos distinguimos por seguir los más altos estándares de calidad, llevando a cabo de manera estricta los procesos de control de seguridad alimentaria e inocuidad con el fin de llevar a tu mesa los mejores productos.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{asset('assets/ka.png')}}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                    <img src="{{asset('assets/sgs.png')}}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                    <img src="{{asset('assets/usda.png')}}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                    <img src="{{asset('assets/ctpat.png')}}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                </div>
            </div>
        </div>
    </section>
    @stop
</body>

</html>