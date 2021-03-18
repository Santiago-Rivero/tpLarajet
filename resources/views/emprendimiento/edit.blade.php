@extends('layouts.plantillabaseemp')
@section('contenido')
<head>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
 <link rel="stylesheet" href="{{asset('css/create.css')}}">
       </head>
<h2>Editar Emprendimiento</h2>
<form id="Form" action="/emprendimientos/{{$emprendimiento->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$emprendimiento->nombre}}">
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
              @if (old('localidad_id') == $localidad->id)
              <option value="{{$localidad['id']}}" selected>{{$localidad['nombre']}}</option>
          	  @else
                <option value="{{$localidad['id']}}">{{$localidad['nombre']}}</option>
	          @endif


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
    <input  id="image" tabindex="5" value="{{$emprendimiento->image}}" type="file"
           name="image"
       accept="image/png, image/jpeg, image/gif"/>
  </div>
  <div class="mb-3">
  <select id="tipoempresa_id" name="tipoempresa_id"  class="form-control" value="">
    <option value="">Seleccione un tipo de Empresa</option>
    {{-- <option selected="selected" value={{$emprendimiento->tipoempresa_id}}"></option> --}}
        @foreach($tipoempresas as $tipoempresa)
        @if (old('emprendimiento') == $tipoempresa->id)
        <option value="{{$tipoempresa['id']}}" selected>{{$tipoempresa['nombre']}}</option>
          @else
          <option value="{{$tipoempresa['id']}}">{{$tipoempresa['nombre']}}</option>
        @endif

    @endforeach
</select>
<div class="mb-3">
    <label for="" class="form-label">Ubicación Geográfica</label>
    <div id="map" style="height: 350px;"></div>
    <div class="mb-3">
      <div class="mb-3">
      <label for="" class="form-label">Latitud</label>
      <input id="latitud" name="latitud" type="text" value="{{$emprendimiento->latitud}}" class="form-control">
      <br>
      <label for="" class="form-label">Longitud</label>
      <input id="longitud" name="longitud" type="text" value="{{$emprendimiento->longitud}}" class="form-control">
    </div>
  <a href="/emprendimientos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<script type="text/javascript" src="{{asset('js/maped.js')}}"></script>

@endsection