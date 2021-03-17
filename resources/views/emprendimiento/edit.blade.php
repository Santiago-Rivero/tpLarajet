@extends('layouts.plantillabaseemp')

@section('contenido')
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen"/>
   <script type="text/javascript" src="{{asset('js/create.js')}}"></script>
 <link rel="stylesheet" href="{{asset('css/create.css')}}">
      <script>
   $( function() {
     $( "#datepicker" ).datepicker();
   } );
   </script>
   </head>

<h2>Editar Emprendimiento</h2>

<form id="Form" action="/emprendimientos/{{$emprendimiento->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$emprendimiento->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$emprendimiento->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Localidad</label>
    <select id="localidad_id" name="localidad_id"  class="form-control" value="">
        <option value="">Seleccione una Localidad</option>
        {{-- <option selected="selected" value={{$emprendimiento->localidad_id}}"></option> --}}
            @foreach($localidads as $localidad)

            <option value="{{$localidad['id']}}">{{$localidad['nombre']}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text"  class="form-control" value="{{$emprendimiento->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sitio Web</label>
    <input id="sitio_web" name="sitio_web" type="text"  class="form-control" value="{{$emprendimiento->sitio_web}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Instagram</label>
    <input id="instagram" name="instagram" type="text"  class="form-control" value="{{$emprendimiento->instagram}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Facebook</label>
    <input id="facebook" name="facebook" type="text"  class="form-control" value="{{$emprendimiento->facebook}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="nro_telefono" name="nro_telefono" type="text"  class="form-control" value="{{$emprendimiento->nro_telefono}}">
  </div>
  <div class="mb-3">
    {{-- <img src="{{ "data:image/" .emprendimiento::('id')->imageType. ";base64," .base64_encode( $emprendimiento->logo ) }}"> --}}
    <label for="" class="form-label">Logo</label>
    <input  id="logo" tabindex="5" value="{{$emprendimiento->logo}}" type="file"
       class="filepond"
       name="filepond"
       accept="image/png, image/jpeg, image/gif"/>
  </div>
  <div class="mb-3">
  <select id="tipoempresa_id" name="tipoempresa_id"  class="form-control" value="">
    <option value="">Seleccione un tipo de Empresa</option>
    {{-- <option selected="selected" value={{$emprendimiento->tipoempresa_id}}"></option> --}}
        @foreach($tipoempresas as $tipoempresa)

        <option value="{{$tipoempresa['id']}}">{{$tipoempresa['nombre']}}</option>
    @endforeach
</select>

  <a href="/emprendimientos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<script type="text/javascript" src="{{asset('js/create.js')}}"></script>
@endsection
