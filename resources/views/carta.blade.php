<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AMIGO MENSAJERO</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
        <!-- Corrector Ortográfico -->
        <script type="text/javascript" src="gspell/AJS.js">
        </script>
        <script type="text/javascript" src="gspell/googiespell.js">
        </script>
        <script type="text/javascript" src="gspell/cookiesupport.js">
        </script>
        <link href="gspell/googiespell.css" type="text/css"
        rel="stylesheet" media="all" />

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        

    </head>
    <body>
    @extends("layout.plantilla")
      @section("cabecera") 
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/inicio">Inicio</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/carta" style="text-decoration: underline;">Escribe tu Carta<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
                      </li>
                     
                    </ul>
                  </div>
                </nav> 
                <div class="contenedor" >
              <img src="{{asset('assets/img/perrito.png')}}" height="200px" width="300px" id="imagenPerrito" />
              
              <div class="centrado"><textarea id="cajaPerrito">Mi nombre es...</textarea></div>
                <img src="{{asset('assets/img/globito.png')}}" height="100px" width="430px" id="imagenGlobito" />
              <div class="centrado2">Hola... soy Lucas<br>
              ¿Cómo te llamas?</div>
            </div>
        <section>
            <div class="example" >
                <textarea id="texto" cols="70" rows="8" class="textarea" style="margin-left: 300px;" > Esta es una prueva</textarea>
                <div style="display: inline;">
                    <img src="{{asset('assets/img/microfono.png')}}" height="70px" width="60px" onclick="procesar()" style="cursor: pointer;">
                    <button onclick="procesar()" id="procesar"> Dictar por Voz</button>
                </div>
                    <img src="{{asset('assets/img/botonEnviar.png')}}" height="50px" width="100px" onclick="alert('Se enviará la carta al Amigo Mensajero');" style="cursor: pointer;">
            </div>
        </section>   
        @endsection 
        <script type="text/javascript" src="{!! asset('assets/js/mot_recon_voz.js') !!}" async></script>
    </body>
</html>
