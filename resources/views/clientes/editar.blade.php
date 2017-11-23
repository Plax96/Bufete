@section('titulo', "Nuevo Cliente")
@extends('base')

@section('content')
    <form method="POST" action="{{ url('clientes/actualizar/{$cliente->id_cliente}')}}">
  <fieldset>
    <legend>NUEVO CLIENTE</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre", value="{{$cliente->nombre}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Apellido</label>
      <input type="text" class="form-control" aria-describedby="emailHelp"placeholder="Apellido" name="apellido", value="{{$cliente->apellido}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">DPI</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="DPI" name="dpi", value="{{$cliente->dpi}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Teléfono</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Telefono" name="telefono", value="{{$cliente->telefono}}">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary">Modificar</button>
</form>

@endsection
