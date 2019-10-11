@extends("../layout/plantilla")
@section("cabecera")
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/inicio" >Inicio</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/carta">Escribe tu Carta</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
                      </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/usuarios" style="text-decoration: underline;">Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA USUARIOS/crearusuario</h2> 
@endsection
@section("contenido")

<form action="/usuarios" method="post">
<table style="font-size: 14px;font-weight: bold;">

<tr>
<td>Nombre: </td>
<td><input type="text" name="nom_usu">
    {{csrf_field()}}
</td>
</tr>

<tr>
<td>Apellido: </td>
<td><input type="text" name="ape_usu">
</td>
</tr>

<tr>
<td>Correo: </td>
<td><input type="text" name="correo">
</td>
</tr>

<tr>
<td>Fecha nacimiento:: </td>
<td><input type="text" name="fecha_nac">
</td>
</tr>

<tr>
<td>Telefono: </td>
<td><input type="text" name="tel_usu">
</td>
</tr>

<tr>
<td>Rol</td>
<td>
  <select name="nom_rol">
    @foreach($roles as $role)
      <option value="{{$role->nom_rol}}">{{$role->nom_rol}}</option>
    @endforeach
  </select>
</td>
</tr>


<tr>
<td>Usuario: </td>
<td><input type="text" name="usuario" required>
</td>
</tr>

<tr>
<td>Contraseña: </td>
<td><input type="password" name="contrasenia" required>
</td>
</tr>

<tr>
<td>Confirmar Contraseña: </td>
<td><input type="password" name="confirmcontrasenia" required>
</td>
</tr>


<tr><td colspan="2" align="center">
<input type="submit" name="enviar" value="" style="background-image: url('{{asset('assets/img/botonRegistrarCuenta.png')}}'); 
                background-size: cover; height: 40px; width: 241px;">
</td></tr>
</table>
</form>


@endsection