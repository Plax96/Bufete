@section('titulo', "Clientes")
@extends('base')

@section('content')
  <h2 class="mb-5">CLIENTES</h2>
  @forelse ($var->all() as $cliente)
           <div class="resume-item d-flex flex-column flex-md-row mb-5">
             <div class="resume-content mr-auto">
               <h3 class="mb-0"><a href='{{ url("/clientes/editar/{$cliente->id_cliente}")}}'>{{ $cliente->dpi }}</a></h3>
                  <div class="subheading mb-4">Nombre:  {{$cliente->nombre}} {{$cliente->apellido}}</div>
            </div>
             <div class="resume-date text-md-right">
               <span class="text-primary">Teléfono:   {{ $cliente->telefono }}</span>
             </div>
           </div>
          <button type="button" class="btn btn-danger"><a href='{{ url("/clientes/eliminar/{$cliente->id_cliente}")}}' style="text-decoration:">Eliminar</a></button>
  @empty
      <li>No hay clientes registrados</li>
  @endforelse

@endsection
