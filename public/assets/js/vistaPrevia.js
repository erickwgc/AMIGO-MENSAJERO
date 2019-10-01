function imagendiv() {
               var imagen = document.createElement("img"); 
               // agregamos propiedades al elemento
               imagen.src = "http://localhost:8000/assets/img/microfono.png"; 
               
               // agregamos la imagen
               document.getElementById("clonado").appendChild(imagen); 
               return alert('se ha subido la imagen')
           }