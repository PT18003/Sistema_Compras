<?php

namespace App\Http\Controllers;

use Empleados;
use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function index()
    {
        return view('empleados.mostrar');
        
    }
    public function create()
    {
        return view('empleados.create');
    }
    public function show($empleado)
    {
       // compact('empeado');  variable igual de nombre con la que se esta pasando, por ejemplo ['curso'->$curso]
      //  return view('empleados.show',['curso'->$empleado]);
    }
}
