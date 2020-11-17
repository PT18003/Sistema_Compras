<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Municipio;
use App\Models\Departamento;
use App\Models\EstadoCivil;
use App\Models\Genero;
use App\Models\AreaTrabajo;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class EmpleadoController extends Controller
{
    public function create()
    {
        $departamentos = Departamento::all();
        $municipios= Municipio::all();
        $estadocivil = EstadoCivil::all();
        $generos= Genero::all();
        $areatrabajo = AreaTrabajo::all();
        return view('empleados.create',compact('municipios','estadocivil','departamentos','generos','areatrabajo'));
    }
/*     public function getTowns(Request $request,$id)
    {
        if($request->ajax())
        {
            $towns = Empleado::towns($id);
            return response()->json($towns);
        }
    } */
    public function getTowns(Request $request,$id)
    {
        if($request->ajax())
        {
            $towns = Empleado::towns($id);
            return response()->json($towns);
        }
    }
    public function geteTowns(Request $request,Empleado $empleado)//ignorar esto
    {

            return response()->json($empleado);
        
    }
    public function guardar(Request $request)
    {
        $empleado = new Empleado();
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->direccion=$request->direccion;
        $empleado->id_municipio=$request->municipio;
        $empleado->genero_id=$request->genero;
        $empleado->telefono=$request->telefono;
        $empleado->dui=$request->dui;
        $empleado->salario=$request->salario;
        $empleado->vencimientoContrato=$request->vencimientoContrato;
        $empleado->areatrabajo_id=$request->areatrabajo;
        $empleado->estadocivil_id=$request->estadocivil;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
    public function index()
    {
        $empleados=Empleado::paginate(10);
        return view('empleados.view', compact('empleados'));
    }
    public function edit(Empleado $empleado)
    {
        $departamentos = Departamento::all();
        $municipios= Municipio::all();
        $estadocivil = EstadoCivil::all();
        $generos= Genero::all();
        $areatrabajo = AreaTrabajo::all();
        return view('empleados.edit',compact('empleado','municipios','estadocivil','departamentos','generos','areatrabajo'));
    }
    public function actualizar(Request $request, Empleado $empleado)
    {
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->direccion=$request->direccion;
        //$empleado->municipio_id=$request->municipio; WORK IN PROGRESS
        $empleado->genero_id=$request->genero;
        $empleado->telefono=$request->telefono;
        $empleado->dui=$request->dui;
        $empleado->salario=$request->salario;
        $empleado->vencimientoContrato=$request->vencimientoContrato;
        $empleado->areatrabajo_id=$request->areatrabajo;
        $empleado->estadocivil_id=$request->estadocivil;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();//como ya se agrego el softdelete, no lo borra, pero en el index ya no aparecera. 
        return redirect()->route('empleados.index'); 
    }
    public function view(Empleado $empleado)
    {
        $departamentos = Departamento::all();
        $municipios= Municipio::all();
        $estadocivil = EstadoCivil::all();
        $generos= Genero::all();
        $areatrabajo = AreaTrabajo::all();
        return(compact('empleado','municipios','estadocivil','departamentos','generos','areatrabajo'));
    }
}
