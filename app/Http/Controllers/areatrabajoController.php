<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AreaTrabajo;
class AreaTrabajoController extends Controller
{
    public function index()
    {
        $areastrabajo = AreaTrabajo::paginate(1);
        return view('areatrabajos.mostrar', compact('areastrabajo'));
    }
    public function create()
    {
        return view('areatrabajos.create');
    }
    public function guardar(Request $resquest )
    {
        $areatrabajo = new AreaTrabajo();
                    //nombre del campo de la base o clase = $request->nombre del imput 
        $areatrabajo->nombreDep =$resquest->nombreDep;
        $areatrabajo->save();
        return redirect()->route('areatrabajos.index');
                    
        //return $areatrabajo; //para comprobar que se envia
    }
    public function edit(AreaTrabajo $id)
    {
        return view('areatrabajos.edit',compact('id'));
    }
    
/*     OTRA FORMA DE ENCONTRAR UN REGISTRO A PARTIR DE VARIABLE EN URL  
    public function edit($id)
    {
        $area = AreaTrabajo::find($id);
        return $area;
    } */
    public function actualizar(Request $request, AreaTrabajo $id)
    {
        $id->nombreDep =$request->nombreDep;
        $id->save();
        return redirect()->route('areatrabajos.index');
    }

    
}
