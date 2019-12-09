<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/homeStyle.css">
      <link href="{{ asset('css/feed.css') }}" rel="stylesheet">
    <title>Perfil</title>
</head>

<script src="../js/app.js"></script>
<script src="../js/jquery.min.js"></script>


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
                  <h3 class="tituloDescrip">Especie: {!! $datos['mascota']->specie !!}, Edad: {!! $datos['mascota']->age !!} años, Sexo: {!! $datos['mascota']->sex !!}</h2>
                  <h3 class="tituloDescrip">{!! $datos['mascota']->description !!}</h2>
                  <br>

              @if ($datos['user_id'] === $datos['usuario']->id )
                  <a href="/newpost" class="btn color-azul  text-white sombra">Subir post</a>
              @endif




              </div>

              <div class="col-1">


              </div>



            </div>

        </div>


        <div class="container-fluid conten">
            <div class="row contenRow">
@foreach ($datos['publicaciones'] as $imagen)


              <div class="col-4">


                  <img class="imgC sombra" src="../{!! $imagen['photo']!!}">


              </div>

@endforeach
</div>

</div>

  </body>
</html>
