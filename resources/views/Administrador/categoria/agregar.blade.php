@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content_header')
    <h1>Panel Administrativo</h1>
@stop

@section('content')
<form action="" method="POST">
  @csrf
<div class="container mt-5 mr-4">
    <label for="">Nombre de la Categoría</label>
    <input type="text" class="form-control" name="Nombre" placeholder="Ingrese nombre de la categoría">
    <div class="form-group mb-3 mt-3">
      <button type="submit" class="btn btn-primary">Crear Categoría</button>
    </div>


</div>
</form>
@stop