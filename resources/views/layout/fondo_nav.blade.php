<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMIGO MENSAJERO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilo-plantilla.css')}}">
        <style type="text/css">
            body{
                background-image: url('{{asset('assets/img/fondo.png')}}');
            }
        </style>

    </head>
    <body>
            <header>
                <!-- Logotipo y titulo -->
                <img src="{{asset('assets/img/avion.png')}}" height="80px" width="150px"><a class="navbar-brand" href="#" style="font-family: 'Concert One', cursive; font-size: 45px; color: white;">EL AMIGO MENSAJERO</a>
                <!-- Menú de Navegación -->
                 
            </header>
      

    </body>
</html>
