@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Agregar evento
                
                </div>

                <div class="card-body">
                @if(isset($evento))
                <form action="{{url('admin/postagregarEvento')}}" method="post" role="form" enctype="multipart/form-data" >
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" value="update" name="action">
                <input type="hidden" value="{{$evento->id}}" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input required type="text" value="{{$evento->nombre}}" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea class="form-control" placeholder="Descripción" name="descripcion" required>{{$evento->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fecha</label>
                    <input type="text" name="fecha" class="form-control" value="{{$evento->fecha}}"   placeholder="Fecha" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Imagen</label>
                    <br>
                    @if($evento->imagen!="")
                    <image src="{{asset('storage/uploads/'.$evento->imagen)}}" width="100">
                    @endif
                    <input type="file" name="imagen" value="" class="form-control" placeholder="Imagen">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">URL del evento</label>
                    <input type="text" name="url" class="form-control" value="{{$evento->url}}"   placeholder="Fecha" required>
                </div>


                <button type="submit" class="btn btn-default">Guardar</button>
                </form>
                @else
                <form action="{{url('admin/postagregarEvento')}}" method="post" role="form"  enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" value="add" name="action">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input required type="text" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea class="form-control" placeholder="Descripción" name="descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fecha</label>
                    <input type="text" name="fecha" class="form-control"  placeholder="Fecha" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Imagen</label>
                    <input type="file" name="imagen" class="form-control"  placeholder="Imagen">
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
                </form>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
