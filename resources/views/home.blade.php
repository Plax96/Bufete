@extends('layouts.app')

@section('log')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>  <button type="button" class="btn btn-success"><a href='{{ url("/")}}' style="text-decoration:">Entrar</a></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
