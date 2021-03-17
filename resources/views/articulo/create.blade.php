@extends('layouts.plantillabase')

@section('contenido')
<head>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<link rel="stylesheet" href="{{asset('css/create.css')}}">
     <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  </head>
<h2>CREAR REGISTROS</h2>
<form action="/articulos" method="POST" files="true">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input  id="imagen" tabindex="5" type="file"
       class="filepond"
       name="filepond"
       accept="image/png, image/jpeg, image/gif"/>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Caducidad</label>
    <input id="datepicker" name="fecha_caducidad" type="text"  class="form-control" tabindex="4">
  </div>

  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
<script type="text/javascript" src="{{asset('js/create.js')}}"></script>
@endsection
