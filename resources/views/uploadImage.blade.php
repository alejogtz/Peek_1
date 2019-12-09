<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    <title>Document</title>
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

<div class="base">
{!!Form::open(array('url'=>'savenewpost','method'=>'post',
'autocomplete'=> 'on', 'enctype'=>'multipart/form-data'   )) !!}
@csrf

    <h1>Publicar</h1>
    {{Form::label('Foto')}}
    {{Form::file( 'photo') }}
    <br><br>
    {{Form::label('Descripción')}}
    {{Form::text( 'description', null) }}
    <br><br>
    {{Form::label('HashTahs')}}
    {{Form::text( 'hashtags', null) }}
    <br>

  <div class="row">
    {{Form::submit('Enviar',
    ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Postear nueva publicación</span>','class' => 'enviar']) }}

{!!Form::close() !!}

{!!Form::open(array('url'=>'cancel-post','method'=>'post',
        'autocomplete'=> 'on')) !!}
            @csrf


                {{Form::submit('Cancelar',
                ['name' => 'nuevo',
                'id'=>'grabar',
                'content'=>'<span> Cancelar </span>',
                'class' => 'cancelar']
                ) }}

        {!!Form::close() !!}
      </div>
      <img src="take.jpg" class="take">

  </div>

</body>
</html>
