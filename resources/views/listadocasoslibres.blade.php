@section('titulo', "Casos Libres")
@extends('base')

@section('content')
  <h2 class="mb-5">CASOS LIBRES</h2>
  @foreach ($casos as $post)

         <div class="resume-item d-flex flex-column flex-md-row mb-5">
           <div class="resume-content mr-auto">
             <h3 class="mb-0"><a href="#">{{ $post }}</a></h3>
          </div>
         </div>

  @endforeach

@endsection
