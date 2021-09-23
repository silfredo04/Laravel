@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR ARTICULOS</h2>

<form action ="/bodegas" method = "POST">
@csrf
    <div class = "mb-3">
        <label for = "" class ="form-label">Nombre del producto</label>
        <input id ="nombrep" name ="nombrep" type ="text" class = "form-control" tabindex="1">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Codigo</label>
        <input id ="codigo" name ="codigo" type ="text" class = "form-control" tabindex="2">
    </div>
    <div class = "mb-3">
        <label for = "" class ="form-label">Numero de cajas</label>
        <input id ="numeroc" name ="numeroc" type ="number" class = "form-control" tabindex="3">
    </div>
    <a href ="/usuarios" class ="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class ="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection