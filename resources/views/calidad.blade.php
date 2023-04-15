@extends('layout')

<title>
    @yield('title', 'La calidad nos distingue | Frugo')
</title>

@section('content')
    <div class="position-relative"
        style="background-image: url({{ asset('assets/bg_calidad2.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 80vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>{{ __('calidad.Calidad1') }}<br>{{ __('calidad.Calidad2') }}</strong></h1>
            </div>
        </div>
    </div>

    <div class="container py-5 my-5" style="max-width: 500px;">
        <h4 style="color: #3FAE29; font-weight: 800;">{{ __('calidad.CalidadText1') }}</h4><br>
        <p>{{ __('calidad.CalidadText2') }}</p>
        <div class="col text-center">
            <img src="{{ asset('assets/ka.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/sgs.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/usda.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
            <img src="{{ asset('assets/ctpat.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
        </div>



        <h5 style="color: #3FAE29;">{{ __('calidad.CalidadText3') }}</h5><br>
        <ul style="list-style: none;">
            <li>SQF Nivel III</li>
            <p>{{ __('calidad.CalidadText4') }}</p>
            <li>USDA Organic</li>
            <p>{{ __('calidad.CalidadText5') }}</p>
            <li>Kosher</li>
            <p>{{ __('calidad.CalidadText6') }}</p>
            <li>C-TPAT</li>
            <p>{{ __('calidad.CalidadText7') }}</p>
        </ul>
    </div>

    <div class="position-relative" id="agricultura"
        style="background-image: url({{ asset('assets/bg_agricultura.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
            style="height: 80vh;">
            <div class="text-justify">
                <h1 style="font-weight: 900;"><strong>{{ __('calidad.Agricultura') }}<br>{{ __('calidad.Agricultura1') }}</strong></h1>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/natural_badge.png') }}" style="float: left; margin-top: 8%; margin-left: 25%;">
    <div class="container py-5 my-5" style="max-width: 500px;">
        <p>{{ __('calidad.AgriculturaText1') }}</p>
        <p style="color: #3FAE29; font-weight: 600;"><strong>{{ __('calidad.AgriculturaText2') }}</strong></p>
        <p>{{ __('calidad.AgriculturaText3') }}</p>
        <p>- {{ __('calidad.AgriculturaText4') }}<br><br>
            - {{ __('calidad.AgriculturaText5') }}<br><br>
            - {{ __('calidad.AgriculturaText6') }}<br><br>
            - {{ __('calidad.AgriculturaText7') }}<br><br>
            - {{ __('calidad.AgriculturaText8') }}<br><br>
            - {{ __('calidad.AgriculturaText9') }}<br><br>
            - {{ __('calidad.AgriculturaText10') }}</p>
    </div>
@stop
