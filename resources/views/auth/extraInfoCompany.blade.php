<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion Extra de la Empresa</title>
</head>
<body>

        {!!Form::open(array('url'=>'save-extra-info-company','method'=>'post',
        'autocomplete'=> 'on', 'enctype'=>'multipart/form-data')) !!}
        @csrf
        <fieldset>
            <legend>Datos Generales</legend>
            {{Form::label('phone')}}
            {{Form::number( 'phone', null)}}
            <br>
            {{Form::label('paypal')}}
            {{Form::email( 'paypal', null) }}
            <br>        
            {{Form::label('profile_photo')}}
            {{Form::file( 'profile_photo', null) }}
            <br>

            <legend>Datos De la Empresa xD</legend>
            {{Form::label('description', 'Cuentanos algo de tu Empresa.')}}
            {{Form::text( 'description', null) }}
            <br>
            {{Form::label('bussines_name', 'Nombre de la empresa.')}}
            {{Form::text( 'bussines_name', null) }}
            <br>

            {{Form::label('bussines_email', 'Correo Electrónico.')}}
            {{Form::text( 'bussines_email', null) }}
            <br>

            <legend>Ubicacion en google maps</legend>

            {{Form::label('latitude', 'Latitud.')}}
            <input type="text" name="latitude" id="latitude_id">
            <br>

            {{Form::label('longitude', 'Longitud.')}}
            <input type="text" name="longitude" id="longitude_id">
            <br>


            {{Form::submit('Enviar',
            ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Guardar Cambios</span>']) }}
        </fieldset>
        {!!Form::close() !!}


        {!! Form::open(array('url'=>'cancel-register/'.$user_id,'method'=>'post',
        'autocomplete'=> 'on')) !!}
            @csrf
            <legend>Cancelar Registro</legend>
            <fieldset>
                {{Form::submit('cancelar',
                ['name' => 'nuevo',
                'id'=>'grabar',
                'content'=>'<span> Guardar Cambios </span>']) }}
            </fieldset>        
        {!! Form::close() !!}
    
</body>
</html>