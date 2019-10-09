@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")

<form action="/usuarios/{{$usuario->id}}" method="post">
<table>

<tr>
<td>Nombre: </td>
<td><input type="text" name="nom_usu" value="{{$usuario->nom_usu}}">
    {{csrf_field()}}
</td>
</tr>
<input type="hidden" name="_method" value="PUT">
<tr>
<td>Apellido: </td>
<td><input type="text" name="ape_usu" value="{{$usuario->ape_usu}}">
</td>
</tr>

<tr>
<td>Correo: </td>
<td><input type="text" name="correo" value="{{$usuario->email}}">
</td>
</tr>

<tr>
<td>Fecha nacimiento:: </td>
<td><input type="text" name="fecha_nac" value="{{$usuario->fecha_nac}}">
</td>
</tr>

<tr>
<td>Telefono: </td>
<td><input type="text" name="tel_usu" value="{{$usuario->tel_usu}}">
</td>
</tr>

<tr>
<td>Usuario: </td>
<td><input type="text" name="usuario" value="{{$usuario->username}}">
</td>
</tr>

<tr>
<td>Contraseña: </td>
<td><input type="text" name="contrasenia" value="{{$usuario->password}}">
</td>
</tr>


<tr><td colspan="2" align="center">
<input type="submit" name="enviar" value="Enviar">
</td></tr>
</table>
</form>

@endsection