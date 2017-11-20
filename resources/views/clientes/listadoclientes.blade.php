@extends('base')

@section('content')
  <h2 class="mb-5">CLIENTES</h2>
  @foreach ($var->all() as $cliente)
           <div class="resume-item d-flex flex-column flex-md-row mb-5">
             <div class="resume-content mr-auto">
               <h3 class="mb-0">{{ $cliente->dpi }}</h3>
                  <div class="subheading mb-4">Nombre:  {{$cliente->nombre}} {{$cliente->apellido}}</div>
            </div>
             <div class="resume-date text-md-right">
               <span class="text-primary">Teléfono:   {{ $cliente->telefono }}</span>
             </div>
           </div>
  @endforeach

@endsection
