@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR USUARIOS</h2>

<form action ="/usuarios/{{$usuario->id}}" method = "POST">
@csrf
@method('PUT')
    <div class = "mb-3">
        <label for = "" class ="form-label">Nombre</label>
        <input id ="nombre" name ="nombre" type ="text" class = "form-control" value="{{$usuario->nombre}}" tabindex="1">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Correo</label>
        <input id ="correo" name ="correo" type ="text" class = "form-control" value="{{$usuario->correo}}" tabindex="2">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Contraseña</label>
        <input id ="contraseña" name ="contraseña" type ="text" class = "form-control" value="{{$usuario->contraseña}}" tabindex="3">
    </div>
    <a href ="/usuarios" class ="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class ="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection