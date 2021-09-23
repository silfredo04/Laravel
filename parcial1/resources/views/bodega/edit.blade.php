@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR ARTICULO</h2>

<form action ="/bodegas/{{$bodega->id}}" method = "POST">
@csrf
@method('PUT')
    <div class = "mb-3">
        <label for = "" class ="form-label">Nombre del producto</label>
        <input id ="nombrep" name ="nombrep" type ="text" class = "form-control" value="{{$bodega->nombre_producto	}}" tabindex="1">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Codigo</label>
        <input id ="codigo" name ="codigo" type ="text" class = "form-control" value="{{$bodega->codigo}}" tabindex="2">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Numero de cajas</label>
        <input id ="numeroc" name ="numeroc" type ="text" class = "form-control" value="{{$bodega->numero_cajas}}" tabindex="3">
    </div>
    <a href ="/usuarios" class ="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class ="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection