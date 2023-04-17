@extends('layout')

<title>
    @yield('title', 'Nuestros Productos | Frugo')
</title>

@section('content')

<section>
    <div class="container w-75">
        <div class="row p-5">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/brocoli-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.brocoliText') }}</div>
                    </div>
                    <div class="title text-center">{{ __('productos.brocoli') }}</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/apio2-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.apioText') }}
                        </div>
                    </div>
                    <div class="title text-center">{{ __('productos.apio') }}</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/coliflor-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.coliflorText') }}</div>
                    </div>
                    <div class="title text-center">{{ __('productos.coliflor') }}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/esparrago4-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.esparragoText') }}</div>
                    </div>
                    <div class="title text-center">{{ __('productos.esparrago') }}</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/chile-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.jalapenoText') }}
                        </div>
                    </div>
                    <div class="title text-center">{{ __('productos.jalapeno') }}</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/pepino1-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.pepinoText') }}</div>
                    </div>
                    <div class="title text-center">{{ __('productos.pepino') }}</div>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/shutterstock_180005735-180x180.jpg')}}" alt="">
                        <div class="text">{{ __('productos.organicosText') }}</div>
                    </div>
                    <div class="title text-center">{{ __('productos.organicos') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
.card-body {
    position: relative;
    display: inline-block;
}

.title {
    color: #3FAE29;
}

.text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.5s;
}

.card-body:hover img {
    filter: blur(5px);

}

.card-body:hover .text {
    opacity: 1;
}

.card-body:hover {
    border-bottom: solid 1px #3FAE29;
}
</style>


@stop