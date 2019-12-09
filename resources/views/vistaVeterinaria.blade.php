<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">

    <link rel="stylesheet" href="../css/homeStyle.css">
    <title>Veterinaria</title>
</head>

<script src="../js/app.js"></script>
<script src="../js/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>


<link href="../css/starrr.css" rel=stylesheet/>
<script src="../js/starrr.js"></script>
<link rel="stylesheet" href="../css/main.css">
<link href="{{ asset('css/feed.css') }}" rel="stylesheet">

<body>

  <nav class="navbar navbar-light bg-light barra">
  <div class="row">
    <div class="">
      <a href="/feed2"  ><img src="../logo2.png" class="logo"></a>
    </div>

    <form class="busqueda">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
    </form>

    <a href="perfil/{{ $datos['user_id'] }}"><img src="../{!! $datos['usuario']->profile_photo !!}" class="perfil"></a>

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



        <div class="contenido">
            <div class="row">

              <div class="col-1">


              </div>

              <div class="col-4">
                  <img class="imgPanel" src="../{!! $datos['usuario']->profile_photo !!}">
                  <br>
              </div>

              <div class="col-6">
                  <h2 class="tituloPanel">{!! $datos['usuario']->username !!}</h2>
                  <span id="Estrellas"></span>
                  <br><br>
                  <a href="" class="btn color-azul  text-white sombra">Valorar</a>
                  <br>
                  <br>
                  <h3 class="tituloUno">Latitud: {!! $datos['company']->latitude !!}, Longitud: {!! $datos['company']->longitude !!}</h2>
                  <h3 class="tituloUno">Tel. {!! $datos['usuario']->phone !!}</h2>
                  <h3 class="tituloDos">{!! $datos['company']->description !!}</h2>
                  <br>



              </div>

              <div class="col-1">


              </div>



            </div>

        </div>


        <div class="container-fluid conten ">
            <div class="row contenRow">
                    <div class="col-1">


                    </div>
                    <div class="col-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d953.5517268318501!2d-96.725161!3d17.062996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c722156a327cff%3A0x62c74fca25b51ca8!2sAv.%20de%20la%20Independencia%20310%2C%20Zona%20Lunes%20Feb%2009%2C%20Centro%2C%2068000%20Oaxaca%20de%20Ju%C3%A1rez%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1574300967802!5m2!1ses-419!2smx" width="100%" height="400%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    </div>

                    <div class="col-1">


                    </div>

            </div>

        </div>

    <script>
        $('#Estrellas').starrr();
    </script>


  </body>
</html>
