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

<div class="base">
{!!Form::open(array('url'=>'savenewpost','method'=>'post',
'autocomplete'=> 'on', 'enctype'=>'multipart/form-data'   )) !!}
@csrf

    <h5>Escribe una nueva publicación</h5>
    {{Form::label('Foto')}}
    {{Form::file( 'photo') }}
    <br>
    {{Form::label('Descripción')}}
    {{Form::text( 'description', null) }}
    <br>
    {{Form::label('HashTahs')}}
    {{Form::text( 'hashtags', null) }}
    <br>
    {{Form::submit('Enviar',
    ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Postear nueva publicación</span>']) }},

{!!Form::close() !!}

{!!Form::open(array('url'=>'cancel-post','method'=>'post',
        'autocomplete'=> 'on')) !!}
            @csrf
            <h5>Cancelar</h5>

                {{Form::submit('cancelar',
                ['name' => 'nuevo',
                'id'=>'grabar',
                'content'=>'<span> Carcelar </span>']) }}

        {!!Form::close() !!}
  </div>

</body>
</html>
