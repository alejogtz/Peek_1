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
      <img src="logo2.png" class="logo">
    </div>

    <form class="busqueda">
      <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
    </form>

    <img src="perfil.jpg" class="perfil">

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
                  <img class="imgPanel" src="perrito.jpg">
                  <br>
              </div>

              <div class="col-6">
                  <h2 class="tituloPanel">firulais_cachorro</h2>
                  <h3 class="tituloDescrip">Raza Huski, macho de 5 años, soy un perrito muy juguetón,</h2>
                  <h3 class="tituloDescrip">me encanta la comida y busco pareja.</h2>
                  <br>
                  <a href="" class="btn color-azul  text-white sombra">Doname</a>


              </div>

              <div class="col-1">


              </div>



            </div>

        </div>


        <div class="container-fluid conten">
            <div class="row contenRow">

              <div class="col-4">


                  <img class="imgC sombra" src="foto1.png">


              </div>



              <div class="col-4" >

                      <img class="imgC sombra" src="foto2.png">

              </div>

              <div class="col-4">

                    <img class="imgC sombra" src="foto3.png">

              </div>

            </div>

        </div>

        <div class="container-fluid conten ">
            <div class="row contenRow">

              <div class="col-4">


                  <img class="imgC sombra" src="foto4.jpg">


              </div>



              <div class="col-4" >

                      <img class="imgC sombra" src="foto5.jpg">

              </div>

              <div class="col-4">

                    <img class="imgC sombra" src="foto6.jpg">

              </div>

            </div>

        </div>


        <div class="container-fluid conten ">
            <div class="row contenRow">

              <div class="col-4">


                  <img class="imgC sombra" src="foto7.jpg">


              </div>



              <div class="col-4" >

                      <img class="imgC sombra" src="foto8.jpg">

              </div>

              <div class="col-4">

                    <img class="imgC sombra" src="foto9.jpg">

              </div>

            </div>

        </div>



  </body>
</html>
