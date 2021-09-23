@extends('layouts.plantillabase');

@section('contenido')

<a href = "bodegas/create" class ="btn btn-primary">Crear productos</a>
<a href = "/" class ="btn btn-primary">Menu</a>

<table class = "table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE PRODUCTO</th>
            <th scope="col">CODIGO</th>
            <th scope="col">NUMERO DE CAJAS</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bodegas as $bodega)
            <tr>
                <td>{{$bodega->id}}</td>
                <td>{{$bodega->nombre_producto}}</td>
                <td>{{$bodega->codigo}}</td>
                <td>{{$bodega->numero_cajas}}</td>
                <td>
                <form action="{{route ('bodegas.destroy',$bodega->id)}}" method ="POST">
                    <a href="/bodegas/{{$bodega->id}}/edit" class ="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type ="submit" class ="btn btn-danger">Eliminar</button>
                </form>    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection