@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")
    <table border="1">
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Modificar</td>
        </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td><a href="{{route('usuarios.show',$usuario->id)}}">{{$usuario->id}}</a></td>
            <td>{{$usuario->nom_usu}}</td>
            <td>{{$usuario->ape_usu}}</td>
            <td>{{$usuario->correo}}</td>
            <td><a href="{{route('usuarios.edit',$usuario->id)}}">Editar</a> 
                
                <!--<form method="post" action="/usuarios/{{$usuario->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" Value="DELETE">
                    <input type="submit" value="Eliminar">
                </form>
                -->
                <a href="{{route('usuario.delete', $usuario->id)}}">Eliminar</a>
                Permisos
            </td>
             
        </tr>
    @endforeach
    </table>
@endsection