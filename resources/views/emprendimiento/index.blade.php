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
    <div class="container">
        <div class="row">
          <div class = "col">
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
                          <td>{{$emprendimiento->nro_telefono}}</td>
                          <td><img src="images/{{$emprendimiento->logo}}" weigt="40" alt=""></td>
                          <td>{{$emprendimiento->tipoempresa_id}}</td>
                          <td>{{$emprendimiento->latitud}}</td>
                          <td>{{$emprendimiento->longitud}}</td>
                          <td>
                          <form action="{{ route('emprendimientos.destroy',$emprendimiento->id) }}" method="POST">
                            <a href="/emprendimientos/{{$emprendimiento->id}}/edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg></a>
                                @csrf
                                @method('DELETE')
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></button>
                          </form>
                          </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                  </div>
               </div>
            </div>

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