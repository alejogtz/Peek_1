<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registrocompany.css') }}" rel="stylesheet">

    <title>Informacion Extra de la Empresa</title>
</head>
<body>

        {!!Form::open(array('url'=>'save-extra-info-company','method'=>'post',
        'autocomplete'=> 'on', 'enctype'=>'multipart/form-data')) !!}
        @csrf
  <div class="base">
            <h2>Datos Generales</h2>
            {{Form::label('Teléfono:')}}
            {{Form::number( 'phone', null)}}
            <br>
            {{Form::label('paypal:')}}
            {{Form::email( 'paypal', null) }}
            <br>
            {{Form::label('Foto de perfil:')}}
            {{Form::file( 'profile_photo', ['class'=>'etiqueta']) }}
            <br>

            <h5>Datos De la Empresa</h5>
            {{Form::label('description', 'Cuentanos algo de tu Empresa:')}}
            {{Form::text( 'description', null) }}
            <br>
            {{Form::label('bussines_name', 'Nombre de la empresa:')}}
            {{Form::text( 'bussines_name', null) }}
            <br>

            {{Form::label('bussines_email', 'Correo Electrónico:')}}
            {{Form::text( 'bussines_email', null) }}
            <br>

            <h5>Ubicacion en google maps</h5>

            {{Form::label('latitude', 'Latitud.')}}
            <input type="text" name="latitude" id="latitude_id">
            <br>

            {{Form::label('longitude', 'Longitud.')}}
            <input type="text" name="longitude" id="longitude_id">
            <br>


              <div class="row">
            {{Form::submit('Enviar',
            ['name' => 'nuevo','id'=>'grabar','content'=>'<span>Guardar Cambios</span>','class'=>'boton']) }}



            {!!Form::close() !!}

            {!!Form::open(array('url'=>'cancel-register','method'=>'post',
            'autocomplete'=> 'on'))!!}
                @csrf

                    {{Form::submit('Cancelar',
                    ['name' => 'nuevo',
                    'class'=>'cancelar',
                    'id'=>'grabar',
                    'content'=>'<span> Guardar Cambios </span>'
                    ]) }}

            {!! Form::close() !!}
          </div>


        </div>


</body>
</html>
