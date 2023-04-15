@extends('layout')

@section('content')
    <div class="container-fluid p-0">
        <img src="{{ asset('assets/bg-home-vfinal.png') }}" class="img-fluid w-100 d-none d-md-block" alt="..." />
        <img src="{{ asset('assets/bg_home_mb.jpg') }}" class="img-fluid w-100 d-md-none" alt="..." />
    </div>
    <div class="container" style="position: absolute; top: 45rem; left: 0; right: 0; margin: auto;">
        <div class="text-center">
            <span style="color: #3FAE29; font-family: BlackJack; font-weight: 100; font-size: 40px;">{{ __('welcome.welcomeMsg') }}</span>
            <img src="{{ asset('assets/scribble.png') }}" class="img-fluid mx-auto" alt="..." />
        </div>
    </div>
    <section>
        <div class="container" style="position: absolute; top: 55rem; left: 0; right: 0; margin: auto;">
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead">{{ __('welcome.description') }}</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/ka.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                    <img src="{{ asset('assets/sgs.png') }}" alt="" class="img-fluid mx-auto" style="width: 120px;">
                    <img src="{{ asset('assets/usda.png') }}" alt="" class="img-fluid mx-auto"
                        style="width: 120px;">
                    <img src="{{ asset('assets/ctpat.png') }}" alt="" class="img-fluid mx-auto"
                        style="width: 120px;">
                </div>
            </div>
        </div>
    </section>
@stop
