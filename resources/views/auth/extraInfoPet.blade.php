<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registropet.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
{!!Form::open(array('url'=>'save-extra-info-pet','method'=>'post',
'autocomplete'=> 'on', 'enctype'=>'multipart/form-data'   )) !!}
@csrf
<div class="base">
    <h2>Datos Generales</h2>
    {{Form::label('Teléfono:')}}
    {{Form::number( 'phone', null)}}
    <br>
    {{Form::label('paypal:')}}
    {{Form::email( 'paypal', null) }}
    <br>
    {{Form::label('Foto perfil:')}}
    {{Form::file( 'profile-photo',['class'=>'etiqueta']) }}
    <br>
    <h5>Datos De la mascota</h5>
    {{Form::label('nombre:')}}
    {{Form::text( 'name', null) }}
    <br>
    {{Form::label('Edad:')}}
    {{Form::number( 'age', null) }}
    <br>
    <div>
        <input type="radio" name="sex" value="male" title="male" checked>Macho<br>
        <input type="radio" name="sex" value="female" title="female">Hembra<br>
    </div><br>
    {{Form::label('specie', 'Especie:')}}
    {{Form::text( 'specie', null) }}
    <br>
    {{Form::label('description', 'Cuentanos algo de tu mascota:')}}
    <br>
    {{Form::text( 'description', null, ['class'=>'input-descripcion']) }}
    <br>

    <div class="row">
    {{Form::submit('Enviar',
    ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Guardar Cambios</span>']) }},
</fieldset>
{!!Form::close() !!}

{!!Form::open(array('url'=>'cancel-register','method'=>'post',
        'autocomplete'=> 'on')) !!}
            @csrf
            <legend>Cancelar Registro</legend>
            <fieldset>
                {{Form::submit('cancelar',
                ['name' => 'nuevo',
                'id'=>'grabar',
                'content'=>'<span> Guardar Cambios </span>']) }}
            </fieldset>
        {!!Form::close() !!}
    

</body>
</html>
