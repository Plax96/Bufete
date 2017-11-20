<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    public function index()
    {
        $casos =['uno','dos','tres'];
        return view('listadocasoslibres', compact('casos'));
    }
}
