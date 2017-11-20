<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
class ClienteController extends Controller
{
  public function index()
  {
    $var = Cliente::all();
    return view('clientes/listadoclientes',compact('var'));
  }
  public function create()
  {
    $cliente=DB::table('cliente')->get();
    return view('clientes/crear', ['cliente'=>$cliente]);
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'nombre'=>'required',
      'apellido'=>'required',
      'dpi'=>'required',
      'telefono'=>'required'
    ]);
    $abogado = new Cliente;
    $abogado->nombre=$request->input('nombre');
    $abogado->apellido=$request->input('apellido');
    $abogado->dpi=$request->input('dpi');
    $abogado->estado=1;
    $abogado->telefono=$request->input('telefono');
    $abogado->save();
    return redirect('/');
  }

}
