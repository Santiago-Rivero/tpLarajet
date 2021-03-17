@extends('layouts.plantillabase')

@section('css')

<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

@endsection

@section('contenido')

<a href="articulos/create" class="btn btn-primary ">CREAR</a>
<br>
<p></p>
<div class="col-md-4 text-right"> <button id="exportar" class="btn btn-primary"><i class="fas fa-file-export    "></i>> </div>
<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Imagen</th>
      <th scope="col">Fecha caducidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $articulo)
    <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->codigo}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cantidad}}</td>
        <td>{{$articulo->precio}}</td>
        <td><img src="images/{{$articulo->imagen}}" weigt="40" alt=""></td>
        <td>{{$articulo->fecha_caducidad}}</td>
        <td>
         <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
          <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
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
