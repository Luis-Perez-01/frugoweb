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
                        <div class="text">
                            Floretes<br>
                            Mezcla de tallo y floretes picados
                            Floretes miniatura
                            Micro floretes
                            Tallos y floretes en trozos
                            Tallos</div>
                    </div>
                    <div class="title text-center">BRÓCOLI</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/apio2-180x180.jpg')}}" alt="">
                        <div class="text">
                            En rebanadas <br>
                            En cubos
                        </div>
                    </div>
                    <div class="title text-center">APIO</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/coliflor-180x180.jpg')}}" alt="">
                        <div class="text">Floretes</div>
                    </div>
                    <div class="title text-center">COLIFLOR</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/esparrago4-180x180.jpg')}}" alt="">
                        <div class="text">
                            En trozos <br>
                            Puntas y trozos</div>
                    </div>
                    <div class="title text-center">ESPÁRAGO</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/chile-180x180.jpg')}}" alt="">
                        <div class="text">
                            En cubos
                        </div>
                    </div>
                    <div class="title text-center">JALAPEÑO VERDE</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/pepino1-180x180.jpg')}}" alt="">
                        <div class="text">En cubos</div>
                    </div>
                    <div class="title text-center">PEPINO</div>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/tomate-180x180.jpg')}}" alt="">
                        <div class="text">
                            jitomate en cubos</div>
                    </div>
                    <div class="title text-center">JITOMATE</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/frambuesa1-180x180.jpg')}}" alt="">
                        <div class="text">
                            Entera
                            En trozos
                        </div>
                    </div>
                    <div class="title text-center">FRAMBUESA</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/mango-180x180.jpg')}}" alt="">
                        <div class="text">En trozos</div>
                    </div>
                    <div class="title text-center">MANGO</div>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/fresas-180x180.jpg')}}" alt="">
                        <div class="text">Entera</div>
                    </div>
                    <div class="title text-center">FRESA</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/shutterstock_180005735-180x180.jpg')}}" alt="">
                        <div class="text">Floretes de brócoli
                            Tallos y floretes picados de brócoli
                            Apio en cubos
                            Apio en rebanadas
                            Pepino en cubos
                        </div>
                    </div>
                    <div class="title text-center">PRODUCTOS ORGÁNICOS</div>
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