<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoCivil;
class EstadoCivilController extends Controller
{
    public function index()
    {
        $estadosciviles = EstadoCivil::all();
        return view('estadosciviles.view', compact('estadosciviles'));
    }
    public function create()
    {
        return view('estadosciviles.create');
    }
    public function guardar(Request $request)
    {
        $estadocivil = New EstadoCivil();
        $estadocivil->nombreEstado = $request->estadocivil;
        $estadocivil->save();
        return redirect()->route('estadosciviles.index');
    }
    public function edit(EstadoCivil $estadocivil)
    {
        return view('estadosciviles.edit', compact('estadocivil'));
    }
    public function actualizar(Request $request, EstadoCivil $estadocivil)
    {
        $estadocivil->nombreEstado = $request->estadocivil;
        $estadocivil->save();
        return redirect()->route('estadosciviles.index');
    }
    public function destroy(EstadoCivil $estadocivil)
    {
        $estadocivil->delete();
        return redirect()->route('estadosciviles.index'); 
    }
}
