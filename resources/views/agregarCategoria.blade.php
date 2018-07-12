@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Agregar categoria
                
                </div>

                <div class="card-body">
                @if(isset($categoria))
                <form action="{{url('admin/postagregarCategoria')}}" method="post" role="form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" value="update" name="action">
                <input type="hidden" value="{{$categoria->id}}" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input required type="text" value="{{$categoria->titulo}}" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea class="form-control" placeholder="Descripción" name="descripcion" required>{{$categoria->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Imagen</label>
                    <input type="text" name="imagen" value="{{$categoria->imagen}}" class="form-control" name="imagen" placeholder="Imagen" required>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
                </form>
                @else
                <form action="{{url('admin/postagregarCategoria')}}" method="post" role="form">
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
                    <label for="exampleInputPassword1">Imagen</label>
                    <input type="text" name="imagen" class="form-control" name="imagen" placeholder="Imagen" required>
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
