<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMIGO MENSAJERO</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
        <link src="js/reconocimiento_voz.js">
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
        <!--Estilos-->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="js/galeria_arrastre.js"></script>
        <link rel="stylesheet" href="css/style.css">
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
    <section>
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
                    <a class="nav-link" href="http://localhost:8000/carta" style="text-decoration: underline;" >Escribe tu Carta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
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
 
     
                <div class="example" >
                    <textarea id="texto" cols="70" rows="8" class="textarea" style="margin-left: 300px; margin-top: 50px;" > Esta es una prueva</textarea>
                    <div style="display: inline;">
                    <!--
                        <img src="{{asset('assets/img/microfono.png')}}" height="70px" width="60px" onclick="procesar()" style="cursor: pointer;">
                       -->
                       <button onclick="procesar()" id="procesar"> Dictar por Voz</button>
                    </div>
                    <input type="submit" value="Enviar" onclick="alert('Se enviará la carta al Amigo Mensajero');" style="cursor: pointer;">
                </div>
            </section>
        <!--Arrastrar imagenes-->
        <section id="zonadestino">
        <p>Arrastre las imagenes aqui</p>
        </section>
        
        <section id="cajaimagen">
            <img class="imagen" src="img/default/auto.png" id="imagen1" >
            <img class="imagen" src="img/default/mama_coco.png" id="imagen2" >
            <img class="imagen" src="img/default/minecraft.png" id="imagen3" >
            <img class="imagen" src="img/default/perro.png" id="imagen4" >
        </section>

        <!-- Motor de reconocimiento de Voz Javascript -->
        <script type="text/javascript">
                 var recognition;
                var recognizing = false;
                if (!('webkitSpeechRecognition' in window)) {
                    alert("¡API no soportada!");
                } else {
                    recognition = new webkitSpeechRecognition();
                    recognition.lang = "es-VE";
                    recognition.continuous = true;
                    recognition.interimResults = true;

                    recognition.onstart = function() {
                        recognizing = true;
                        console.log("empezando a eschucar");
                    }
                    recognition.onresult = function(event) {

                     for (var i = event.resultIndex; i < event.results.length; i++) {
                        if(event.results[i].isFinal)
                            document.getElementById("texto").value += event.results[i][0].transcript;
                        }
                        
                        //texto
                    }
                    recognition.onerror = function(event) {
                    }
                    recognition.onend = function() {
                        recognizing = false;
                        document.getElementById("procesar").innerHTML = "Dictar por Voz";
                        console.log("terminó de eschucar, llegó a su fin");

                    }

                }

                function procesar() {

                    if (recognizing == false) {
                        recognition.start();
                        recognizing = true;
                        document.getElementById("procesar").innerHTML = "Detener";
                    } else {
                        recognition.stop();
                        recognizing = false;
                        document.getElementById("procesar").innerHTML = "Dictar por Voz";
                    }
                }
        </script>
    </body>
</html>