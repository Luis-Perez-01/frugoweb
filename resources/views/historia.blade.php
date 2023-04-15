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
        <h1 style="font-weight: 900;"><strong>{{ __('historia.trayectoria') }}</strong></h1>
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
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarAnterior()">
                  <<<< </button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1 active" data-bs-toggle="tab"
                  data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1"
                  aria-selected="false">1974</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2" data-bs-toggle="tab"
                  data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-profile"
                  aria-selected="true">1977</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">1980</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1" data-bs-toggle="tab"
                  data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-home"
                  aria-selected="false">1990</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarSiguiente()">>>></button>
              </div>
            </div>
          </div>

          <div class="container" id="contenedor2" style="display: none;">
            <div class="row">
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarAnterior()">
                  <<<< </button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2" data-bs-toggle="tab"
                  data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-profile"
                  aria-selected="true">1993</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-6" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2000</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa1" data-bs-toggle="tab"
                  data-bs-target="#nav-7" type="button" role="tab" aria-controls="nav-home"
                  aria-selected="false">2006</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa2" data-bs-toggle="tab"
                  data-bs-target="#nav-8" type="button" role="tab" aria-controls="nav-profile"
                  aria-selected="true">2009</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarSiguiente()">>>></button>
              </div>
            </div>
          </div>

          <div class="container" id="contenedor3" style="display: none;">
            <div class="row">
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarAnterior()">
                  <<<< </button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-9" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2010</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-10" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2011</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-11" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2012</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-12" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2013</button>
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
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4" onclick="mostrarAnterior()">
                  <<<< </button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-13" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2014</button>
              </div>
              <div class="col d-grid">
                <button class="btn btn-lg btn-outline-danger hvr-grow rounded-4 empresa3" data-bs-toggle="tab"
                  data-bs-target="#nav-14" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">2015</button>
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
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.1974') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <h3 class="text-center pt-4">1977</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.1977') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">1980</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.1980') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">1990</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.1990') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">1993</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.1993') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">2000</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2000') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">2006</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2006') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-8" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">2009</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2009') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-9" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">{{ __('historia.FROM') }}</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2010') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-10" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">{{ __('historia.FROM') }}</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2011') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-11" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">{{ __('historia.FROM') }}</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2012') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-12" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">{{ __('historia.FROM') }}</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2013') }}</p>
          </div>
          <div class="tab-pane fade" id="nav-13" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">{{ __('historia.FROM') }}</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2014') }}.</p>
          </div>
          <div class="tab-pane fade" id="nav-14" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <h3 class="text-center pt-4">2015</h3>
            <p class="lead p-3" style="text-align: justify;">{{ __('historia.2015') }}</p>
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
        <h1 style="font-weight: 900;"><strong>{{ __('historia.Presencia') }}</strong></h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container py-5 my-5" style="max-width: 500px;">
      <p>{{ __('historia.PresenciaText1') }}</p>
      <p style="color: #3FAE29;"><strong>{{ __('historia.PresenciaText2') }}</strong></p>
      <p>{{ __('historia.PresenciaText3') }}</p>
    </div>
  </section>

  <div class="position-relative" id="equipo"
    style="background-image: url({{ asset('assets/bg_nuestra.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
      style="height: 100vh;">
      <div class="text-justify">
        <h1 style="font-weight: 900;"><strong>{{ __('historia.Equipo') }}</strong></h1>
      </div>
    </div>
  </div>

  <section>
    <div class="container py-5 my-5" style="max-width: 500px;">
      <p class="pt-5">{{ __('historia.EquipoText1') }}</p>
      <p class="py-5" style="color: #3FAE29;"><strong>{{ __('historia.EquipoText2') }}</strong></p>
      {{ __('historia.EquipoText3') }}
      <p class="pt-3" style="color: #3FAE29;">
        {{ __('historia.EquipoText4') }}
      </p>
      <p>
        {{ __('historia.EquipoText5') }}
      </p>
      </p>
    </div>
  </section>

  <div class="position-relative" id="filosofia"
    style="background-image: url({{ asset('assets/bg_expectativas.jpg') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container d-flex align-items-end justify-content-center text-uppercase text-white p-2"
      style="height: 100vh;">
      <div class="text-justify">
        <h1 style="font-weight: 900;"><strong>{{ __('historia.Filosofia') }}</strong></h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container py-5 my-5" style="max-width: 500px;">
      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText1') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText2') }}
      </p>
      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText3') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText4') }}
      </p>
    </div>
    <div class="container py-5 my-5" style="max-width: 500px; background-color: #DFF0D6;">
      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText5') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText6') }}
      </p>

      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText7') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText8') }}
      </p>


      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText9') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText10') }}
      </p>

      <p style="color: #3FAE29;">
        <strong>
          {{ __('historia.FilosofiaText11') }}
        </strong>
      </p>
      <p>
        {{ __('historia.FilosofiaText12') }}
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
