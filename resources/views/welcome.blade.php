<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peek</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/feed.css') }}" rel="stylesheet">

    </head>
    <body>
      <nav class="navbar navbar-light bg-light barra">
      <div class="row">
        <div class="">
          <img src="logo2.png" class="logo">
        </div>
        <div class="busqueda">
        <form >
          <input class="busqueda form-control" type="search" placeholder="Buscar" aria-label="Search">
        </form>
      </div>
      </div>
      </nav>
    </body>
</html>
