@extends('layout')

<title>
    @yield('title', 'Contáctanos | Frugo')
</title>

@section('content')
<div class="container-fluid p-0">
    <img src="{{asset('assets/bg_escucharte.jpg')}}" class="img-fluid w-75"/>
    <div class="container" style="position: absolute; top: 30rem; left: 0; right: 0; bottom: 10rem; margin: auto; padding-left: 20%; font-weight: 800;">
        <h1 class="text-white fw-bolder pb-5">{{ __('contacto.title') }}<br>{{ __('contacto.title1') }}</h1>
        <div class="card border-0 rounded-0 shadow-sm">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col">
                        <h3 class="p-2 fw-bolder" style="color: #3FAE29">{{ __('contacto.title2') }}<br>
                        </h3>
                        <p class="p-2">
                            Sun Harvest Foods Inc. <br> <br>
                            Contacto:
                            Art Sanchez <br>
                            6201 Progressive Ave. Suite 400 <br>
                            San Diego, CA 92154
                        </p>
                        <p class="p-2 fw-bolder" style="color: #3FAE29">
                            Tel. +1 (619) 661 0909<br>
                            <a href="mailto:art@gotbroccoli.com">art@gotbroccoli.com</a>
                        </p>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d840.5821516789701!2d-117.00227239313938!3d32.570759371364446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4eb94942112c6e67!2sSun+Harvest+Foods+Inc!5e0!3m2!1sen!2smx!4v1429490686163"
                                width="300" height="114" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/contacto_brocoli.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="p-2 fw-bolder" style="color: #3FAE29">{{ __('contacto.title3') }}<br>
                        </h3>
                        <p class="p-2">
                            Productos Frugo S.A. de C.V. <br><br>
                            Km 1 Carretera Salamanca - La Ordeña <br>
                            Salamanca, Guanajuato <br>
                            México C.P. 36720
                        </p>
                        <p class="p-2 fw-bolder" style="color: #3FAE29">
                            Tel. +52 (464) 64 10666<br>
                            <a href="mailto:hello@frugo.com.mx">hello@frugo.com.mx</a>
                        </p>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3734.7431073762996!2d-101.18038200000001!3d20.598546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c85af49555555%3A0xfa62651d03472170!2sPruductos+Frugo+S.A.+de+C.V.!5e0!3m2!1sen!2smx!4v1429490926613"
                                width="300" height="100" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="p-2 fw-bolder" style="color: #3FAE29">
                            {{ __('contacto.title4') }}<br>
                        </h3>
                        <p class="p-2">
                            Frugalmex S. de R.L. <br><br>
                            Blvd. Bugambilias No. 310 Int. 1 <br>
                            Col. Bugambilias C.P. 36720 <br>
                            Salamanca, Gto. <br>
                        </p>
                        <p class="p-2 fw-bolder" style="color: #3FAE29">
                            Tel. +52 (464) 6412556<br>
                            <a href="mailto:hello@frugalmex.com.mx">hello@frugalmex.com.mx</a>
                        </p>
                        <div class="map"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.7790682372192!2d-101.18847160000003!3d20.5970781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c84e63d1f79af%3A0x6e9c5e549d2c0bab!2sBugambilias+310%2C+Bugambilias%2C+36724+Salamanca%2C+Gto.!5e0!3m2!1sen!2smx!4v1429491010389"
                                width="300" height="100" frameborder="0" style="border:0"></iframe></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop