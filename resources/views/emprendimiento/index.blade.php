@extends('layouts.plantillabaseemp')

@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
@endsection
@section('contenido')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
<a href="emprendimientos/create" class="btn btn-primary ">Crear</a>
<br>
<p></p>
<div class="col-md-4 text-right"> <button id="exportar" class="btn btn-primary"><i class="fas fa-file-export    "></i>> </div>
<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Localidad</th>
      <th scope="col">Dirección</th>
      <th scope="col">Sitio Web</th>
      <th scope="col">Instagram</th>
      <th scope="col">Facebook</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Logo</th>
      <th scope="col">Tipo de Empresa</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($emprendimientos as $emprendimiento)
    <tr>
        <td>{{$emprendimiento->id}}</td>
        <td>{{$emprendimiento->nombre}}</td>
        <td>{{$emprendimiento->descripcion}}</td>
        <td>{{$emprendimiento->localidad_id}}</td>
        <td>{{$emprendimiento->direccion}}</td>
        <td>{{$emprendimiento->sitio_web}}</td>
        <td>{{$emprendimiento->instagram}}</td>
        <td>{{$emprendimiento->facebook}}</td>
        <td>{{$emprendimiento->telefono}}</td>
        <td><img src="images/{{$emprendimiento->logo}}" weigt="40" alt=""></td>
        <td>{{$emprendimiento->tipoempresa_id}}</td>
        <td>
         <form action="{{ route('emprendimientos.destroy',$emprendimiento->id) }}" method="POST">
          <a href="/emprendimientos/{{$emprendimiento->id}}/edit" class="btn btn-info">Editar</a>
          <a href="/emprendimientos/{{$emprendimiento->id}}/show" class="btn btn-primary">Visualizar</a>
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
         </form>
        </td>
    </tr>
    @endforeach

  </tbody>
 </table>
  @section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

  <script>
        $(document).ready(function() {
        $('#articulos').DataTable();
        } );
    $(function() {
    $("#exportar").click(function(e){
    var table = $("#htmltable");
    if(table && table.length){
    $(table).table2excel({
    exclude: ".noExl",
    name: "Excel Document Name",
    filename: "BBBootstrap" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
    fileext: ".xls",
    exclude_img: true,
    exclude_links: true,
    exclude_inputs: true,
    preserveColors: false
    });
    }
    });

    });

  </script>

  @endsection
@endsection
