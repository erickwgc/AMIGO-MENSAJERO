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
        <script type="text/javascript" src="{!! asset('assets/js/jquery-3.4.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/bootstrap.js') !!}"></script>
        <style type="text/css">
            body{
                background-image: url('{{asset('assets/img/fondo.png')}}');
                background-size: cover;
                height: 800px;
            }
           
        </style>

    </head>
    <body>
            <header>
                <!-- Logotipo y titulo -->
                <img src="{{asset('assets/img/avion.png')}}" height="80px" width="150px"><a class="navbar-brand" href="#" style="font-family: 'Concert One', cursive; font-size: 45px; color: white;">EL AMIGO MENSAJERO</a>

                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal" style="margin-left:350px; border:0px; padding: 0px;"><img src="{{asset('assets/img/botonIniciarSesion.png')}}" height="40px" width="200px"/></button>


                  <div class="modal fade" role="dialog" id="loginModal">
                  <div class="modal-dialog">
                    <div class="modal-content" style="background-image:url('{{asset('assets/img/fondo.png')}}'); border:2px solid rgb(0,0,0);">
                      <div class="modal-header" style="border-bottom: 0px;">
                     
                        <img src="{{asset('assets/img/circuloUsuario.png')}}" style="width: 449px;">
                        <button type="button" class="close" data-dismiss="modal" style="color: white; margin-top: -25px;">&times;</button>

                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                            <img src="{{asset('assets/img/usr.jpg')}}" width="30px" height="30px" style="position: absolute; margin-top: 5px; margin-left: 10px;">
                            <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario o Correo electrónico" style="-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px; text-align: center;">
                          </div>
                          <div class="form-group">
                            <img src="{{asset('assets/img/candado.jpg')}}" width="30px" height="30px" style="position: absolute; margin-top: 5px; margin-left: 10px;">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" style="-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px; text-align: center;">
                          </div>
                      </div>

                      <div class="modal-footer" style="border-top: 0px;">
                        <button type="submit" class="btn btn-success" style="background-color: rgb(255,192,0);color: black; -webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px; margin: 0px auto; font-weight: bold;">Ingresar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Menú de Navegación -->
                 
            </header>
      

    </body>
</html>
