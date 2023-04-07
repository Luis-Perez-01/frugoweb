@extends('layout')

<title>
    @yield('title', 'Únete | Frugo')
</title>

@section('content')
<div class="container-fluid p-0">
    <img src="{{asset('assets/bg_unete.jpg')}}" class="img-fluid w-100" alt="..." />
    <div class="container" style="position: absolute; top: 15rem; left: 0; right: 0; margin: auto; padding-left: 30%;">
        <h1 class="text-white fw-bolder pb-5">SÉ PARTE DE <br>
            NUESTRO EQUIPO</h1>
        <div class="card border-0 rounded-0">
            <div class="card-body p-3">
                <h3 class="p-2 fw-bolder" style="color: #3FAE29">
                    ÚNETE COMO COLABORADOR <br>
                    O PRÁCTICAS PROFESIONALES
                </h3>
                <p class="p-2">
                    Si deseas compartir nuestra cultura de trabajo y te interesa vivir nuestros valores, nuestra calidad
                    a
                    nivel mundial, competitividad, confianza y relación de cercanía con nuestros clientes, te invitamos
                    a
                    que te integres a nuestro equipo.
                </p>
                <h3 class="p-2 fw-bolder" style="color: #5C666F">
                    ¡CONTÁCTANOS!
                </h3>
                <p class="p-2">
                    Carretera a Salamanca La Ordeña km 1 <br>
                    Salamanca, Guanajuato, México 36720
                </p>
                <p class="p-2 fw-bolder" style="color: #3FAE29">
                    Tel. 52 (464) 64 10666 <br>
                    <a href="mailto:rh@productosfrugo.com.mx">rh@productosfrugo.com.mx</a>
                </p>
            </div>
        </div>
    </div>
</div>
@stop