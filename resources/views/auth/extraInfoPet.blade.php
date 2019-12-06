<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <title>Document</title>
</head>
<body>
    
{!!Form::open(array('url'=>'save-extra-info-pet/{{$user_id}}','method'=>'post',
'autocomplete'=> 'on', 'enctype'=>'multipart/form-data'   )) !!}
@csrf
<fieldset>
    <legend>Datos Generales</legend>
    {{Form::label('phone')}}
    {{Form::number( 'phone', null)}}
    <br>
    {{Form::label('paypal')}}
    {{Form::email( 'paypal', null) }}
    <br>        
    {{Form::label('profile-photo')}}
    {{Form::file( 'profile-photo') }}
    <br>
    <legend>Datos De la mascota xD</legend>
    {{Form::label('nombre')}}
    {{Form::text( 'name', null) }} 
    <br>
    {{Form::label('Edad')}}
    {{Form::number( 'age', null) }}
    <br>
    <div>
        <input type="radio" name="sex" value="male" title="male" checked>Macho<br>
        <input type="radio" name="sex" value="female" title="female">Hembra<br>
    </div><br>
    {{Form::label('Especie')}}
    {{Form::text( 'especie', null) }}
    <br>
    {{Form::label('description', 'Cuentanos algo de tu mascota.')}}
    {{Form::text( 'description', null) }}
    <br>
    {{Form::submit('Enviar',
    ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Guardar Cambios</span>']) }},
</fieldset>
{!!Form::close() !!}

{!!Form::open(array('url'=>'cancel-register/'.$user_id,'method'=>'post',
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