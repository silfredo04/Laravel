@extends('layouts.plantillabase');

@section('contenido')

<a href = "usuarios/create" class ="btn btn-primary">Crear Usuarios</a>
<a href = "/" class ="btn btn-primary">Menu</a>

<table class = "table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->correo}}</td>
                <td>{{$usuario->contraseña}}</td>
                <td>
                    <form action="{{route ('usuarios.destroy',$usuario->id)}}" method ="POST">
                    <a href ="/usuarios/{{$usuario->id}}/edit" class ="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type = "submit" class ="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection