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

      <div class="izquierda">
        <div class="card tarjeta">
          <div class="row">
            <img src="perfil.jpg" class="perfil-tarjeta" >
            <p class="user">pancrasio_gordito</p>
          </div>
          <img src="perfil.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>200</strong> Me gusta</p>
              <a class="btn btn-donar" href="">Donar</a>
            </div>
              <p class="card-text"><strong>pancrasio_gordito:</strong>  Muy cómodo, doname y seré feliz :)</p>
            <div class="row hashtag">
              <a class="" href=""><strong>#dog</strong></a>
              <a class="" href=""><strong>#relax</strong></a>
              <a class="" href=""><strong>#amame</strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#doname</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>
            </div>
          </div>
        </div>
        <div class="card tarjeta">
          <div class="row">
            <img src="perfil.jpg" class="perfil-tarjeta" >
            <p class="user">pancrasio_gordito</p>
          </div>
          <img src="foto2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>100</strong> Me gusta</p>
              <a class="btn btn-donar" href="">Donar</a>
            </div>
              <p class="card-text"><strong>pancrasio_gordito:</strong>  Aqui con mi amiguito el gato</p>
            <div class="row hashtag">
              <a class="" href=""><strong>#dog</strong></a>
              <a class="" href=""><strong>#relax</strong></a>
              <a class="" href=""><strong>#amame</strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#doname</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>
            </div>
          </div>
        </div>
        <div class="card tarjeta">
          <div class="row">
            <img src="perfil.jpg" class="perfil-tarjeta" >
            <p class="user">pancrasio_gordito</p>
          </div>
          <img src="foto3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>560</strong> Me gusta</p>
              <a class="btn btn-donar" href="">Donar</a>
            </div>
              <p class="card-text"><strong>pancrasio_gordito:</strong>  Mi dueña me ama demasiado <3 </p>
            <div class="row hashtag">
              <a class="" href=""><strong>#dueña</strong></a>
              <a class="" href=""><strong>#relax</strong></a>
              <a class="" href=""><strong>#amame</strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#doname</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>
            </div>
          </div>
        </div>
        <div class="card tarjeta">
          <div class="row">
            <img src="perfil.jpg" class="perfil-tarjeta" >
            <p class="user">pancrasio_gordito</p>
          </div>
          <img src="foto5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>1034</strong> Me gusta</p>
              <a class="btn btn-donar" href="">Donar</a>
            </div>
              <p class="card-text"><strong>pancrasio_gordito:</strong>  Me encanta subirme a la cama :P </p>
            <div class="row hashtag">
              <a class="" href=""><strong>#feliz</strong></a>
              <a class="" href=""><strong>#relax</strong></a>
              <a class="" href=""><strong>#amame</


                strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#doname</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>
            </div>
          </div>
        </div>
        <div class="card tarjeta">
          <div class="row">
            <img src="perfil.jpg" class="perfil-tarjeta" >
            <p class="user">pancrasio_gordito</p>
          </div>
          <img src="foto4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
              <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
              <p class="likes-number"><strong>200</strong> Me gusta</p>
              <a class="btn btn-donar" href="">Donar</a>
            </div>
              <p class="card-text"><strong>pancrasio_gordito: </strong> Por favor ayudame, doname algo </p>
            <div class="row hashtag">
              <a class="" href=""><strong>#saveme</strong></a>
              <a class="" href=""><strong>#sad</strong></a>
              <a class="" href=""><strong>#amame</strong></a>
              <a class="" href=""><strong>#soltero</strong></a>
              <a class="" href=""><strong>#doname</strong></a>
              <a class="" href=""><strong>#perrito</strong></a>
            </div>
          </div>
        </div>
      </div>
      <div class="derecha">
      </div>


    </body>
</html>
