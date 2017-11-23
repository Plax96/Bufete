@section('titulo', "Nuevo Caso")
@extends('base')

@section('content')
    <form method="POST" action="{{ url('caso/guardar')}}">
  <fieldset>
    <legend>NUEVO CASO</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Resumen</label>
      <input type="text" class="form-control" placeholder="Resumen" name="resumen">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Descripcion</label>
      <input type="text" class="form-control" aria-describedby="emailHelp"placeholder="Descripcion" name="descripcion">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Cliente</label>
        <select name="id_cliente" placeholder="Cliente" class = "form-control">
          @foreach($data as $role)
               <option value='{{$role->id_cliente}}' >{{ $role->nombre }}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Abogado</label>
        <select name="id_abogado" placeholder="Abogado" class = "form-control">
          @foreach($abogado as $rol)
               <option value='{{$rol->id_abogado}}' >{{ $rol->nombre }}</option>
          @endforeach
        </select>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

@endsection
