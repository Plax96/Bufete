@section('titulo', "Casos Libres")
@extends('base')

@section('content')
  <h2 class="mb-5">CASOS LIBRES</h2>
  @foreach ($casos as $post)

  <div class="resume-item d-flex flex-column flex-md-row mb-5">
    <div class="resume-content mr-auto">
      <h3 class="mb-0"><a href='{{ url("/caso/editar/{$post->id}")}}'>{{ $post->resumen }}</a></h3>
         <div class="subheading mb-4">Cliente:  {{$post->clinombre}} {{$post->cliape}}</div>
                  <p>{{ $post->descripcion }}</p>
   </div>
    <div class="resume-date text-md-right">
      <span class="text-primary">Fecha Ingresado:   {{ $post->fecha_ingreso }}</span>
    </div>
  </div>

  @endforeach

@endsection
