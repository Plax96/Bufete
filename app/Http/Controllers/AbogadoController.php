<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abogado;
use DB;

class AbogadoController extends Controller
{
    public function create()
    {
      $abogado=DB::table('abogado')->get();
      return view('abogado/crear', ['abogado'=>$abogado]);
    }
    public function store(Request $request)
    {
      $this->Validate($request, [
        'nombre'=>'required',
        'apellido'=>'required',
        'dpi'=>'required',
        'telefono'=>'required'
      ]);
      $abogado = new Abogado;
      $abogado->nombre=$request->input('nombre');
      $abogado->apellido=$request->input('apellido');
      $abogado->dpi=$request->input('dpi');
      $abogado->estado=1;
      $abogado->telefono=$request->input('telefono');
      $abogado->save();
      return redirect('casos/casoslibres');
    }
}
