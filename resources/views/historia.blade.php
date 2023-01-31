@extends('layout')

@section('content')
<h1 class="position-absolute bottom-50 end-50 text-uppercase text-white p-2"><strong>Una trayectoria <br> de excelencia</strong></h1>
<img src="{{asset('assets/bg_acercade_sinblur.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; object-fit: contain;">
<section>
    <div class="container w-75 p-3">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link m-2 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" style="background-color: #3FAE29; color: white;">1974</button>
                        <button class="nav-link m-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="background-color: #3FAE29; color: white;">1977</button>
                        <button class="nav-link m-2" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" style="background-color: #3FAE29; color: white;">1980</button>
                        <button class="nav-link m-2" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="background-color: #3FAE29; color: white;">1990</button>
                        <button class="nav-link m-2" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="background-color: #3FAE29; color: white;">1993</button>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">1974 Nace Productos Frugo.
                        Con sus primeras exportaciones de frutas Block Frozen a Japón, la empresa emerge como exportadora.</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">Da inicio la exportación a Estados Unidos y Canadá</div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">Adquisición de tecnología IQF junto con una línea de productos de vegetales en la que se incluyen brócoli y coliflor.</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Inversión en tecnología con la finalidad de aumentar la capacidad de producción.
                        El incremento en la capacidad de la planta significó un marcado crecimiento.</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">La empresa obtiene el reconocimiento ALTEX (Empresa Altamente Exportadora).</div>
                </div>
            </div>
        </div>
    </div>
</section>
<img src="{{asset('assets/bg_calidad.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; object-fit: contain;">
<section>
    <div class="container w-50 py-3">
        <p>
            Somos una empresa 100% mexicana con más de 40 años de experiencia en la industria alimentaria. Estamos ubicados en la zona centro del Bajío, región de la República Mexicana conocida principalmente por la alta calidad de vegetales que se cultivan, gracias a la riqueza del suelo y a un clima propicio para la agricultura.

        </p>
        <p style="color: #3FAE29;">
            <strong>
                FRUGO ES RECONOCIDO EN MERCADOS NACIONALES E INTERNACIONALES POR SU CALIDAD Y LIDERAZGO EN LA ELABORACIÓN DE CONGELADOS.
            </strong>
        </p>
        <p>
            Nuestros productos son exportados a Estados Unidos, Canadá, Europa, Sudamérica y otras regiones, manteniendo siempre los más altos estándares de calidad y teniendo en mente, en todo momento, la satisfacción de todos nuestros clientes y consumidores.
        </p>
    </div>
</section>
<img src="{{asset('assets/bg_expectativas.jpg')}}" alt="" class="" style="min-height: 40vh; max-width: 100%; background-size:cover; background-attachment: fixed;">
<section>
    <div class="container w-50 py-3">
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
            Procesar alimentos sanos e inocuos que satisfagan las expectativas de nuestros clientes mediante un proceso de mejora continua y desarrollo de nuestro personal, destacándonos por la calidad mundial, competitividad en precios y procesos, confianza total y una relación cercana con nuestros clientes, nuestros empleados y la comunidad.
        </p>
    </div>
    <div class="container w-50 p-5" style="background-color: #DFF0D6;">


        <p style="color: #3FAE29;">
            <strong>
                CALIDAD MUNDIAL
            </strong>
        </p>
        <p>
            La exportación de Frugo es todo un éxito porque nuestros productos son reconocidos internacionalmente por su excelente calidad, desde los procesos de producción hasta el resultado final: alimentos completamente inocuos y sanos. Puesto que nos importa mucho que nuestros clientes estén contentos, una de nuestras principales preocupaciones es que el producto que les entregamos cubra todas sus necesidades y expectativas.
        </p>

        <p style="color: #3FAE29;">
            <strong>
                CONFIANZA
            </strong>
        </p>
        <p>
            Los consumidores pueden tener una absoluta confianza en nuestros productos. El gran número de certificaciones que hemos obtenido son prueba de que nuestros alimentos han sido producidos, procesados y manipulados de acuerdo a los más altos estándares de inocuidad alimentaria. <br><br>
            También somos una empresa confiable por la honestidad y transparencia de todos nuestros procesos y porque siempre cumplimos con los contratos y fechas de entrega establecidas.
        </p>


        <p style="color: #3FAE29;">
            <strong>
                COMPETITIVIDAD
            </strong>
        </p>
        <p>
            Puesto que siempre estamos buscando tener la mejor calidad posible, nos preocupamos por invertir en tecnología de punta que nos permita obtener los mejores resultados por medio de procesos eficientes que se apegan a las normas internacionales para el manejo de alimentos. Además, nuestra capacidad y prontitud para cumplir y nuestros precios competitivos son uno de los sellos distintivos de la empresa.
        </p>

        <p style="color: #3FAE29;">
            <strong>
                CERCANÍA CON NUESTROS CLIENTES
            </strong>
        </p>
        <p>
            En Frugo nos preocupamos por los consumidores, por eso contamos con una disponibilidad las 24 horas (Sun Harvest) para atenderlos en todo momento. Mantenemos con el cliente una relación estrecha con una actitud humana y una absoluta amabilidad. La innovación de nuestra empresa está enfocada en conocer bien a nuestros clientes para saber qué es lo que quieren exactamente y así lograr que queden siempre satisfechos.
        </p>
    </div>
</section>
@stop