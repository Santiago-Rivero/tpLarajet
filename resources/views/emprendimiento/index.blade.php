@extends('layouts.plantillabaseemp')

@section('css')
@endsection
@section('contenido')
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    <link rel="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css"/>


</head>
<a href="emprendimientos/create" class="btn btn-primary ">Crear</a>
<br>
<p></p>
<table id="emprendimiento" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
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
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
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
        <td>{{$emprendimiento->latitud}}</td>
        <td>{{$emprendimiento->longitud}}</td>
        <td>
         <form action="{{ route('emprendimientos.destroy',$emprendimiento->id) }}" method="POST">
          <a href="/emprendimientos/{{$emprendimiento->id}}/edit" class="btn btn-info">Editar</a>
          <a href="/emprendimientos/{{$emprendimiento->id}}/show" class="btn btn-primary">Visualizar</a>
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
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>


  <script>
       $(document).ready(function() {
    $('#emprendimiento').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

  </script>

  @endsection
@endsection