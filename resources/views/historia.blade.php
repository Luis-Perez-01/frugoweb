@extends('layout')

<title>
    @yield('title', 'Acerca de Frugo | Historia')
</title>

@section('content')

    <div class="position-relative"
        style="background-image: url({{ asset('assets/bg_acercade_sinblur.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 60vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>Una trayectoria <br> de excelencia</strong></h1>
            </div>
        </div>
    </div>

    <section class="p-5 border-bottom" id="empresa">
        <article>
            <div class="container">
                <div class="row" id="nav-tab" role="tablist">
                    <div class="container" id="contenedor1">
                        <div class="row">
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarAnterior()">
                                    <<<< </button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1 active"
                                    data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab"
                                    aria-controls="nav-1" aria-selected="false">1974</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2"
                                    data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="true">1977</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">1980</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1"
                                    data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab"
                                    aria-controls="nav-home" aria-selected="false">1990</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarSiguiente()">>>></button>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="contenedor2" style="display: none;">
                        <div class="row">
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarAnterior()">
                                    <<<< </button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2"
                                    data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="true">1993</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-6" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2000</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1"
                                    data-bs-toggle="tab" data-bs-target="#nav-7" type="button" role="tab"
                                    aria-controls="nav-home" aria-selected="false">2006</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2"
                                    data-bs-toggle="tab" data-bs-target="#nav-8" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="true">2009</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarSiguiente()">>>></button>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="contenedor3" style="display: none;">
                        <div class="row">
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarAnterior()">
                                    <<<< </button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-9" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2010</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-10" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2011</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-11" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2012</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-12" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2013</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarSiguiente()">>>></button>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="contenedor4" style="display: none;">
                        <div class="row">
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarAnterior()">
                                    <<<< </button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-13" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2014</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3"
                                    data-bs-toggle="tab" data-bs-target="#nav-14" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">2015</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4"
                                    onclick="mostrarSiguiente()">>>></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent-4">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1"
                        tabindex="0">
                        <h3 class="text-center pt-4">1974</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Nace Productos Frugo.
                            Con sus primeras exportaciones de frutas Block Frozen a Japón, la empresa emerge como
                            exportadora.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-profile-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">1977</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Da inicio la exportación a Estados Unidos y Canadá</p>
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">1980</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Adquisición de tecnología IQF junto con una línea de productos de vegetales en la que se
                            incluyen brócoli y coliflor.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">1990</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Inversión en tecnología con la finalidad de aumentar la capacidad de producción.
                            El incremento en la capacidad de la planta significó un marcado crecimiento.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">1993</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            La empresa obtiene el reconocimiento ALTEX (Empresa Altamente Exportadora).</p>
                    </div>
                    <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2000</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            La planta se certifica como AIB.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2006</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Se obtiene la certificación Kosher.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-8" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2009</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Inversión en nueva tecnología, lo que representa un crecimiento en la producción desde el 2009 a
                            la fecha. Nuevamente se observa un significativo crecimiento de la empresa</p>
                    </div>
                    <div class="tab-pane fade" id="nav-9" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2010 al 2014</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Certificación SQF Nivel 3 obteniendo por cuatro años consecutivos la certificación Excelente en
                            las versiones actualizadas.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-10" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2011</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Certificación SQF Nivel 3 obteniendo por cuatro años consecutivos la certificación Excelente en
                            las versiones actualizadas.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-11" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2012</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Certificación SQF Nivel 3 obteniendo por cuatro años consecutivos la certificación Excelente en
                            las versiones actualizadas.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-12" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2013</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Certificación SQF Nivel 3 obteniendo por cuatro años consecutivos la certificación Excelente en
                            las versiones actualizadas.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-13" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2014</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Certificación SQF Nivel 3 obteniendo por cuatro años consecutivos la certificación Excelente en
                            las versiones actualizadas.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-14" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <h3 class="text-center pt-4">2015</h3>
                        <p class="lead p-3" style="text-align: justify;">
                            Nuevamente se obtiene la certificación SQF con calificación Excelente, que es el puntaje máximo
                            que se le puede otorgar a la industria alimentaria a nivel internacional.

                            Certificación C-TPAT.
                            Se adquieren nuevas cámaras de congelación, las cuales representan una mayor capacidad de
                            almacenaje, lo que significa un nuevo crecimiento para la empresa.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>


    <div class="position-relative" id="presencia"
        style="background-image: url({{ asset('assets/bg_calidad.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 100vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>CALIDAD <br>Y LIDERAZGO</strong></h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container py-5 my-5" style="max-width: 500px;">
            <p>
                Somos una empresa 100% mexicana con más de 40 años de experiencia en la industria alimentaria. Estamos
                ubicados en la zona centro del Bajío, región de la República Mexicana conocida principalmente por la alta
                calidad de vegetales que se cultivan, gracias a la riqueza del suelo y a un clima propicio para la
                agricultura.

            </p>
            <p style="color: #3FAE29;">
                <strong>
                    FRUGO ES RECONOCIDO EN MERCADOS NACIONALES E INTERNACIONALES POR SU CALIDAD Y LIDERAZGO EN LA
                    ELABORACIÓN DE CONGELADOS.
                </strong>
            </p>
            <p>
                Nuestros productos son exportados a Estados Unidos, Canadá, Europa, Sudamérica y otras regiones, manteniendo
                siempre los más altos estándares de calidad y teniendo en mente, en todo momento, la satisfacción de todos
                nuestros clientes y consumidores.
            </p>
        </div>
    </section>

    <div class="position-relative" id="equipo"
        style="background-image: url({{ asset('assets/bg_nuestra.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 100vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>NUESTRA GENTE, <br>NUESTRA <br> MOTIVACIÓN</strong></h1>
            </div>
        </div>
    </div>

    <section>
        <div class="container py-5 my-5" style="max-width: 500px;">
            <p class="pt-5">
                Nuestro sistema de gestión fortalece la protección del medio ambiente y amplía la seguridad laboral de los
                empleados, manteniendo siempre una buena atmósfera de trabajo.
            <p class="py-5" style="color: #3FAE29;">
                <strong>
                    PORQUE PARA FRUGO, EL CUIDADO AMBIENTAL Y EL BIENESTAR DE SUS TRABAJADORES SON PRIORIDAD.
                </strong>
            </p>
            Para mí es muy satisfactorio formar parte de esta empresa porque aquí se reconoce la importancia que tienen la
            inocuidad y la calidad en la producción de alimentos. Desde el campo hasta la entrega del producto ya terminado
            se controlan todos los aspectos necesarios para cumplir con las especificaciones de nuestros clientes. Los
            productos Frugo son sinónimo de alimentos sanos, seguros y sabrosos.
            <p class="pt-3" style="color: #3FAE29;">
                Ing. Miguel S.
            </p>
            <p>
                Gerencia de Gestión Integral
            </p>
            </p>
        </div>
    </section>

    <div class="position-relative" id="filosofia"
        style="background-image: url({{ asset('assets/bg_expectativas.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 100vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>SUPERAR <br> EXPECTATIVAS</strong></h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container py-5 my-5" style="max-width: 500px;">
            <p style="color: #3FAE29;">
                <strong>
                    Visión
                </strong>
            </p>
            <p>
                Frugo es líder en alimentos buenos, ricos y saludables, para que la gente coma bien y viva mejor.
            </p>
            <p style="color: #3FAE29;">
                <strong>
                    Misión
                </strong>
            </p>
            <p>
                Procesar alimentos sanos e inocuos que satisfagan las expectativas de nuestros clientes mediante un proceso
                de mejora continua y desarrollo de nuestro personal, destacándonos por la calidad mundial, competitividad en
                precios y procesos, confianza total y una relación cercana con nuestros clientes, nuestros empleados y la
                comunidad.
            </p>
        </div>
        <div class="container py-5 my-5" style="max-width: 500px; background-color: #DFF0D6;">
            <p style="color: #3FAE29;">
                <strong>
                    CALIDAD MUNDIAL
                </strong>
            </p>
            <p>
                La exportación de Frugo es todo un éxito porque nuestros productos son reconocidos internacionalmente por su
                excelente calidad, desde los procesos de producción hasta el resultado final: alimentos completamente
                inocuos y sanos. Puesto que nos importa mucho que nuestros clientes estén contentos, una de nuestras
                principales preocupaciones es que el producto que les entregamos cubra todas sus necesidades y expectativas.
            </p>

            <p style="color: #3FAE29;">
                <strong>
                    CONFIANZA
                </strong>
            </p>
            <p>
                Los consumidores pueden tener una absoluta confianza en nuestros productos. El gran número de
                certificaciones que hemos obtenido son prueba de que nuestros alimentos han sido producidos, procesados y
                manipulados de acuerdo a los más altos estándares de inocuidad alimentaria. <br><br>
                También somos una empresa confiable por la honestidad y transparencia de todos nuestros procesos y porque
                siempre cumplimos con los contratos y fechas de entrega establecidas.
            </p>


            <p style="color: #3FAE29;">
                <strong>
                    COMPETITIVIDAD
                </strong>
            </p>
            <p>
                Puesto que siempre estamos buscando tener la mejor calidad posible, nos preocupamos por invertir en
                tecnología de punta que nos permita obtener los mejores resultados por medio de procesos eficientes que se
                apegan a las normas internacionales para el manejo de alimentos. Además, nuestra capacidad y prontitud para
                cumplir y nuestros precios competitivos son uno de los sellos distintivos de la empresa.
            </p>

            <p style="color: #3FAE29;">
                <strong>
                    CERCANÍA CON NUESTROS CLIENTES
                </strong>
            </p>
            <p>
                En Frugo nos preocupamos por los consumidores, por eso contamos con una disponibilidad las 24 horas (Sun
                Harvest) para atenderlos en todo momento. Mantenemos con el cliente una relación estrecha con una actitud
                humana y una absoluta amabilidad. La innovación de nuestra empresa está enfocada en conocer bien a nuestros
                clientes para saber qué es lo que quieren exactamente y así lograr que queden siempre satisfechos.
            </p>
        </div>
    </section>

    <script>
        function mostrarAnterior() {
            var contenedor1 = document.getElementById("contenedor1");
            var contenedor2 = document.getElementById("contenedor2");
            var contenedor3 = document.getElementById("contenedor3");
            var contenedor4 = document.getElementById("contenedor4");
            if (contenedor4.style.display === "block") {
                contenedor4.style.display = "none";
                contenedor3.style.display = "block";
            } else if (contenedor3.style.display === "block") {
                contenedor3.style.display = "none";
                contenedor2.style.display = "block";
            } else if (contenedor2.style.display === "block") {
                contenedor2.style.display = "none";
                contenedor1.style.display = "block";
            } else {
                contenedor1.style.display = "none";
                contenedor4.style.display = "block";
            }
        }

        function mostrarSiguiente() {
            var contenedor1 = document.getElementById("contenedor1");
            var contenedor2 = document.getElementById("contenedor2");
            var contenedor3 = document.getElementById("contenedor3");
            var contenedor4 = document.getElementById("contenedor4");
            if (contenedor1.style.display === "block") {
                contenedor1.style.display = "none";
                contenedor2.style.display = "block";
            } else if (contenedor2.style.display === "block") {
                contenedor2.style.display = "none";
                contenedor3.style.display = "block";
            } else if (contenedor3.style.display === "block") {
                contenedor3.style.display = "none";
                contenedor4.style.display = "block";
            } else {
                contenedor4.style.display = "none";
                contenedor1.style.display = "block";
            }
        }

        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                $('.parallax').css('top', -(scroll * 0.2) + 'px');
            });
        });
    </script>

@stop
