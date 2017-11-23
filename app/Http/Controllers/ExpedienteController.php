<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;
use DB;
use App\Cliente;
use App\Abogado;
class ExpedienteController extends Controller
{
    public function index()
    {
        $casos = DB::table('expediente')
        ->join('cliente','cliente.id_cliente','=','expediente.id_cliente')->where('expediente.estado','=','1')
        ->select('expediente.id','expediente.resumen','expediente.descripcion','expediente.fecha_ingreso','cliente.nombre as clinombre','cliente.apellido as cliape')
        ->get();

        return view('casos/casoslibres', compact('casos'));
    }

    public function create()
    {
      $data=Cliente::all();
      $abogado=Abogado::all();
      $expediente=DB::table('expediente')->get();
      return view('casos/crear', compact('expediente','data','abogado'));
    }
    public function store(Request $request)
    {
      $this->Validate($request, [
        'resumen'=>'required',
        'descripcion'=>'required',
        'id_cliente'=>'required',
        'id_abogado'=>'required'
      ]);
      $abogado = new Expediente;
      $abogado->resumen=$request->input('resumen');
      $abogado->descripcion=$request->input('descripcion');
      $abogado->estado=1;
      $abogado->id_cliente=$request->input('id_cliente');
      $abogado->id_cliente=$request->input('id_abogado');
      $abogado->save();
      return redirect('/');
    }

    public function ocupados()
    {
      $casos = DB::table('expediente')
      ->join('abogado','abogado.id_abogado','=','expediente.id_abogado')
      ->join('cliente','cliente.id_cliente','=','expediente.id_cliente')->where('expediente.estado','=','2')
      ->select('expediente.resumen','expediente.descripcion','expediente.fecha_ingreso','cliente.nombre as clinombre','cliente.apellido as cliape','abogado.nombre as abnombre','abogado.apellido as abapellido')
      ->get();

        return view('casos/ocupados', compact('casos'));
    }

    public function finalizados()
    {
      $casos = DB::table('expediente')
      ->join('abogado','abogado.id_abogado','=','expediente.id_abogado')
      ->join('cliente','cliente.id_cliente','=','expediente.id_cliente')->where('expediente.estado','=','3')
      ->select('expediente.resumen','expediente.descripcion','expediente.fecha_ingreso','cliente.nombre as clinombre','cliente.apellido as cliape','abogado.nombre as abnombre','abogado.apellido as abapellido')
      ->get();

        return view('casos/finalizados', compact('casos'));

    }
    public function edit($id)
    {
      $caso=Expediente::all();
      $abogado=Abogado::all();
      $cliente=Cliente::findOrFail($id);
      return view('casos.editar', compact('cliente','abogad','caso'));
    }
    public function update(Request $request, $id)
      {
        $this->Validate($request, [
          'resumen'=>'required',
          'descripcion'=>'required',
          'id_abogado'=>'required',
        ]);
        Expediente::where('id',$id)->update([
              'resumen'=>$request->input('resumen'),
              'descripcion'=>$request->input('descripcion'),
              'id_abogado'=>$request->input('id_abogado'),
            ]);

        return redirect('casos/libres');
      }

    //listar casos por fecha = ASC ascendente
    //->orderBY('ASC'
    //->join(la tabla, loscampos.conpunto))
}
