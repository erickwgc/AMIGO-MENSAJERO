<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

        <!--Estilos-->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <style type="text/css">
            body{
                background-image: url('{{asset('img/fondo.png')}}');
            }
            nav{
                margin:0 50px;
                border-style: solid;    
            }
            li{
                font-size: 20px;
                font-weight: bold;

            }
        </style>
    </head>

    <body>
     <!-- Logotipo y titulo -->
     <img src="{{asset('img/avion.png')}}" height="80px" width="150px">
            
            <a class="navbar-brand" href="#" style="font-family: 'Concert One', cursive;font-size: 45px; color: white;">EL AMIGO MENSAJERO</a>

            
            <!-- Menú de Navegación -->
             <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="http://localhost:8000/" >Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/carta" >Escribe tu Carta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/boletin" style="text-decoration: underline;">Boletín</a>
                  </li>
                 
                </ul>
              </div>
            </nav>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
        
    </body>
</html>
