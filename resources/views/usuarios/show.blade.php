@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")
    <h1>{{$usuario->nom_usu}}</h1>
    <h1>{{$usuario->ape_usu}}</h1>
    <h1>{{$usuario->correo}}</h1>
    <h1>{{$usuario->fecha_nac}}</h1>
    <h1>{{$usuario->tel_usu}}</h1>
    
@endsection