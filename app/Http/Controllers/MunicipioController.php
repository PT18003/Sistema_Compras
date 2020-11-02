<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;
use Doctrine\DBAL\Abstraction\Result;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::paginate(7);
        return view('municipios.view', compact('municipios'));
    }
    public function create()
    {
        $departamentos = Departamento::all();
        return view('municipios.create',compact('departamentos'));
    }
    public function guardar(Request $request)
    {
        $municipio=new Municipio();
        $municipio->municipio = $request->municipio;
        $municipio->id_departamento =$request->departamento;
        $municipio->save();
        return redirect()->route('municipios.index');
    }
    public function edit(Municipio $municipio)
    {
        $departamento = Departamento::all();
        return view('municipios.edit', compact('municipio'), compact('departamento'));
    }
    public function actualizar(Request $request, Municipio $municipio)
    {
        $municipio->municipio = $request->municipio;
        $municipio->id_departamento = $request->departamento;
        $municipio->save();
        return redirect()->route('municipios.index');
    }
    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
        return redirect()->route('municipios.index'); 
    }
}
