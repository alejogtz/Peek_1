<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peek</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          $("#heart").click(function(){
            if($("#heart").hasClass("liked")){
              $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
              $("#heart").removeClass("liked");
            }else{
              $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
              $("#heart").addClass("liked");
            }
          });
        });
        </script>
    </head>
    <body>
      <nav class="navbar navbar-light bg-light barra">
      <div class="row">
        <div class="">
        <a href="/feed2"  ><img src="logo2.png" class="logo"></a>
        </div>

        <form class="busqueda">
          <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
        </form>


    @foreach ($datos as $dato)
     @if ($dato->user->id === $user_id)
        <a href="perfil/{{ $user_id }}"><img src="{{ $dato->user->profile_photo }}" class="perfil"></a>
         @break
    @endif
    @endforeach

        <a class="btn boton-login" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
      </nav>


      <div class="izquierda">



  @foreach ($datos as $dato)
        <div class="card tarjeta">
          <div class="row">
            <img src="{!! $dato->user->profile_photo !!}" class="perfil-tarjeta" >
            <p class="user"><a href="perfil/{!! $dato->user->id !!}" class="negro">{!! $dato->user->username !!}</a></p>
          </div>
          <img src="{!! $dato->post->photo !!}" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>{!! $dato->likes !!}</strong> Me gusta</p>

              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_donations" />
              <input type="hidden" name="business" value="{!! $dato->user->paypal !!}" />
              <input type="hidden" name="currency_code" value="MXN" />
              <input type="image" src="doname.png" border="0" name="submit" title="Chido carnal" alt="Donate with PayPal button" class="doname"/>
              <img alt="" border="0" src="https://www.paypal.com/en_MX/i/scr/pixel.gif" width="1" height="1" />
            </form>
            </div>
              <p class="card-text"><strong>{!! $dato->user->username !!}</strong>  {!! $dato->post->description !!}</p>
            <div class="row hashtag">
              <a class="" href=""><strong>#dog</strong></a>
              <a class="" href=""><strong>#relax</strong></a>
              <a class="" href=""><strong>#amame</strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>

            </div>
          </div>
        </div>

  @endforeach


      </div>


      <div class="derecha">
        <div class="card  busqueda-veter" >

          <div class="card-body body-tarj-veter">
              <img src="veterinarias.png" class="busqueda-logo">
          </div>
        </div>

        <div class="card  tarjeta-veter" >

          <div class="card-body body-tarj-veter">

            <div class="card mb-3 subtarjeta" >
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="vete4.png" class="card-img " alt="...">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <h5 class="card-title titulo-veter">Espacio Animal</h5>
                        <img src="fivestars.png" class="stars " >
                      </div>

                      <div class="col-lg-4">
                          <a class="btn btn-ver" href="perfil/5">Ver</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 subtarjeta" >
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="vete2.png" class="card-img " alt="...">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <h5 class="card-title titulo-veter">Doctor Roksana</h5>
                        <img src="fivestars.png" class="stars " >
                      </div>

                      <div class="col-lg-4">
                          <a class="btn btn-ver" href="perfil/6">Ver</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 subtarjeta" >
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="vete3.png" class="card-img " alt="...">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <h5 class="card-title titulo-veter">CliniPet Oaxaca</h5>
                        <img src="fivestars.png" class="stars " >
                      </div>

                      <div class="col-lg-4">
                          <a class="btn btn-ver" href="perfil/7">Ver</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 subtarjeta" >
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="vete1.png" class="card-img " alt="...">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <h5 class="card-title titulo-veter">Dr. Martin</h5>
                        <img src="fivestars.png" class="stars " >
                      </div>

                      <div class="col-lg-4">
                          <a class="btn btn-ver" href="perfil/8">Ver</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 subtarjeta" >
              <div class="row no-gutters">
                <div class="col-lg-8">
                  <img src="banner.png" class="banner " alt="...">
                </div>

              </div>
            </div>




          </div>

        </div>
      </div>

      <div class="inferior">
          <a class="btn btn-subir" href=""> <img src="mas.png" class="mas"> </a>
          <a class="" href=""> <img src="homeblack.png" class="home"> </a>
          <a class="" href=""> <img src="perro.png" class="perro"> </a>
      </div>

    </body>
</html>
