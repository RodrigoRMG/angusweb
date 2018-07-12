@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Agregar platillo
                
                </div>

                <div class="card-body">
                @if(isset($menu))

                <form action="{{url('admin/postagregarMenu')}}" method="post" role="form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" value="update" name="action">
                <input type="hidden" value="{{$menu->id}}" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input required type="text" value="{{$menu->titulo}}" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea class="form-control" placeholder="Descripción" name="descripcion" required>{{$menu->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Precio</label>
                    <input type="text" name="precio" value="{{$menu->precio}}" class="form-control" name="precio" placeholder="Precio" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Categoria</label>
                    <select class="form-control"  name="categoria" class="select" required>
                        <option value="">selecciona...</option>
                        @foreach($categorias as $categoria)
                        @if($categoria->id==$menu->categoria)
                        <option value="{{$categoria->id}}" selected>{{$categoria->titulo}}</option>
                        @else
                        <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
                </form>

                @else
                <form action="{{url('admin/postagregarMenu')}}" method="post" role="form">
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
                    <label for="exampleInputPassword1">Precio</label>
                    <input type="text" name="precio" class="form-control" name="precio" placeholder="Precio" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Categoria</label>
                    <select class="form-control" name="categoria" class="select" required>
                        <option value="">selecciona...</option>
                        @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                        @endforeach
                    </select>
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
