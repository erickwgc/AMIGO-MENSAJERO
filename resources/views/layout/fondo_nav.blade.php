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

                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal" style="margin-left:300px;"><img src="{{asset('assets/img/botonIniciarSesion.png')}}" height="40px" width="200px"/></button>


                  <div class="modal fade" role="dialog" id="loginModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-tittle">Acceso al Sistema</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Ingrese su Nombre de Usuario o Correo electrónico">
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                          </div>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Acceder</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Menú de Navegación -->
                 
            </header>
      

    </body>
</html>
