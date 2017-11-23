<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
class ClienteController extends Controller
{
  public function index()
  {
    $var = Cliente::all()->where('estado','1');
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
  public function edit($id)
  {
    $cliente=Cliente::findOrFail($id);
    return view('clientes.editar', compact('cliente'));
  }
  public function update(Request $request, $id)
    {
      $this->Validate($request, [
        'nombre'=>'required',
        'apellido'=>'required',
        'dpi'=>'required',
        'telefono'=>'required',
      ]);
      Cliente::where('id_cliente',$id)->update([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'dpi'=>$request->input('dpi'),
            'telefono'=>$request->input('telefono'),
          ]);

      return redirect('clientes');
    }
    public function delete($id)
    {
      Cliente::where('id_cliente', $id)->delete();
      return redirect('clientes');
    }

}
