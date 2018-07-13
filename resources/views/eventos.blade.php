@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Eventos
                <div style="text-align:right">
                <a class="btn btn-primary" href="{{url('admin/agregarEvento')}}">Agregar evento</a>
                </div>
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table datatable" id="myTable">
                   <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Fecha</th>
                        <th></th>
                        </tr>
                   </thead>
                   <tbody>
                   @foreach($eventos as $evento)
                        <tr>
                            <td>{{$evento->nombre}}</td>
                            <td>{{$evento->descripcion}}</td>
                            <td>{{$evento->imagen}}</td>
                            <td>{{$evento->fecha}}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('admin/modificarEvento')}}/{{$evento->id}}">Modificar</a>
                                <a class="btn btn-danger" href="{{url('admin/eliminarEvento')}}/{{$evento->id}}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({language: {
        "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    }});

} );
</script>
@endsection
