<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .contenido form, table{
        width:600px;
        margin: 0 auto;
        background:#FFFFFF;
        }
    
    </style>
</head>
<body>
    @include("layout.fondo_nav")
    @yield("cabecera")    

    <div class="contenido">
        @yield("contenido")
    </div>
    
</body>
</html>