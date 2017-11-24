@section('titulo', "Nuevo Cliente")
@extends('base')

@section('content')
<form method="POST" action='{{ url("clientes/actualizar/{$cliente->id_cliente}")}}'>
        <legend>Editar Residente</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="nombre" value="{{$cliente->nombre}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Apellido</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="apellido" value="{{$cliente->apellido}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">DPI</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="dpi" value="{{$cliente->dpi}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Telefono</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" name="telefono" value="{{$cliente->telefono}}">
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@endsection
