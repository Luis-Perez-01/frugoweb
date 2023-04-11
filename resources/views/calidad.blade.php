@extends('layout')

<title>
    @yield('title', 'Acerca de Frugo | Historia')
</title>

@section('content')
    <div class="position-relative"
        style="background-image: url({{ asset('assets/bg_calidad2.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 80vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>LAS CERTIFICACIONES <br> NOS DISTINGUEN</strong></h1>
            </div>
        </div>
    </div>

    <div class="container py-5 my-5" style="max-width: 500px;">
        <h4 style="color: #3FAE29; font-weight: 800;">ASEGURAR LAS CERTIFICACIONES DE LOS PRODUCTOS QUE ELABORAMOS ES
            UNA
            FORMA DE VIVIR EN
            FRUGO. LA SATISFACCIÓN DE NUESTROS CLIENTES ES EL MOTOR QUE IMPULSA DIARIAMENTE A TODOS LOS QUE AQUÍ
            TRABAJAMOS.
        </h4><br>
        <p>Por ello hemos desarrollado un sistema que controla todos los procesos clave a través de los cuales
            garantizamos
            la entrega de productos con los más altos estándares de calidad y seguridad alimentaria que exigen los
            mercados
            a nivel internacional. Nuestra empresa cumple no sólo con las leyes mexicanas sino también con las
            regulaciones
            de los países a los que exportamos, incluyendo las que exigen organismos como FDA, USDA y EPA.</p>
        <div class="col text-center">
            <img src="{{ asset('assets/ka.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/sgs.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/usda.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/ctpat.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
        </div>



        <h5 style="color: #3FAE29;">Certificaciones</h5><br>
        <ul style="list-style: none;">
            <li>SQF Nivel III</li>
            <p>Desde 2010 cumplimos con los requisitos del Código SQF Nivel III, esquema reconocido por la
                Iniciativa
                Global
                de Seguridad Alimentaria y que se basa en el sistema HACCP y los principios del Codex Alimentarius.
                En
                nuestra auditoria 2015 alcanzamos el máximo score otorgable: 100.</p>
            <li>USDA Organic</li>
            <p>Frugo comprometido con el medio ambiente y una alimentación más saludable, ostenta la certificación
                orgánica
                para productos como brócoli, coliflor y apio.</p>
            <li>Kosher</li>
            <p>Todos nuestros productos mantienen la certificación Kosher Pareve por su origen 100% natural y libre
                de
                proteínas animales.</p>
            <li>C-TPAT</li>
            <p>Es una iniciativa antiterrorista y anticriminal de la Aduana de los Estados Unidos de Norte América
                que
                conmina a la industria y comerciantes a tomar medidas conjuntas a fin de evitar que la carga
                comercial
                sea
                contaminada con artículos ilegales o no manifestados, tales como drogas, armas, explosivos o dinero
                de
                contrabando.</p>
        </ul>
    </div>

    <div class="position-relative" id="agricultura"
        style="background-image: url({{ asset('assets/bg_agricultura.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 80vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>COMPROMETIDOS <br> CON LA CALIDAD</strong></h1>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/natural_badge.png') }}" style="float: left; margin-top: 8%; margin-left: 25%;">
    <div class="container py-5 my-5" style="max-width: 500px;">
        <p>Los vegetales son seleccionados y cortados conforme a las especificaciones de los clientes; pasan por un
            proceso
            de lavado y sanitización y posteriormente son precocidos para ampliar su vida de anaquel hasta por 24
            meses;
            finalmente son sometidos a un congelamiento individual rápido (IQF) lo cual permite la conservación de
            sus
            cualidades como textura, valor nutritivo y sabor hasta su descongelamiento. Todos nuestros productos son
            sometidos a rigurosos análisis Microbiológicos y Fisicoquímicos antes de ser embarcados a nuestros
            clientes.
        </p>
        <p style="color: #3FAE29; font-weight: 600;"><strong>NUESTROS PRODUCTOS NO CONTIENEN CONSERVADORES NI
                SABORIZANTES O
                COLORANTES. SON
                NATURALES.</strong></p>
        <p>Todos nuestros campos están certificados en BUMA, Buen Uso y Manejo de Agroquímicos (certificación de
            SENASICA),
            autorizados por COFEPRIS y Liga de California avalada por EPA Estados Unidos.</p>
        <p>- Llevamos a cabo rigurosos análisis microbiológicos a nuestros pozos de agua de riego, así como de
            residuo
            de
            pesticidas de los productos.<br><br>
            - Riego por goteo con lo que se dosifican el suministro de fertilizantes para crecer vegetales fuertes y
            sanos
            para las personas.<br><br>
            - Los productos se procesan dentro de las 6-7 horas de que es cortado del campo, es por eso que nuestros
            productos
            son frescos.<br><br>
            - Nuestros agricultores llevan buenas prácticas agrícolas en todas las etapas de la proveeduría,
            siembra,
            cosecha
            y transporte de nuestros vegetales.<br><br>
            - Variedades de semilla más adecuadas para el proceso que nuestros clientes requieren.<br><br>
            - Región del Bajío y norte del estado de Guanajuato, tierras buenas para el cultivo.<br><br>
            - Clima adecuado.</p>
    </div>
@stop
