<?php

namespace App\Http\Controllers;

use App\Models\ArticulosProveedor;
use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Proveedor; 

class ArticulosProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulosProveedores = ArticulosProveedor::all();

        return view('articulosProveedores.index')
            ->with('articulosProveedores',$articulosProveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventarios = Inventario::all();
        $proveedores= Proveedor::all();
        return view('articulosProveedores.create')
        -> with('inventarios',$inventarios)
        -> with('proveedores', $proveedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulosProveedor = new ArticulosProveedor ();
        $articulosProveedor->id_inventario=$request->inventario; 
        $articulosProveedor->id_proveedor=$request->proveedor;
        $articulosProveedor->codigoArticulo=$request->codigoArticulo;
        $articulosProveedor->descripcionRol=$request->descripcionRol;
        $articulosProveedor->fechaInicio=$request->fechaInicio;
        $articulosProveedor->fechaFinal=$request->fechaFinal;
        $articulosProveedor->precio=$request->precio;
        $articulosProveedor->periodoPago=$request->periodoPago;
        $articulosProveedor->descuento=$request->descuento;
        $articulosProveedor->tiempoEntrega=$request->tiempoEntrega;


        $articulosProveedor->save();

        return redirect()->route('articulosProveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticulosProveedor  $articulosProveedor
     * @return \Illuminate\Http\Response
     */
    public function show(ArticulosProveedor $articulosProveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticulosProveedor  $articulosProveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventarios = Inventario::all();
        $proveedores= Proveedor::all();
        $articulosProveedor = ArticulosProveedor::find($id);
        return view('articulosProveedores.edit')
        -> with('inventarios',$inventarios)
        -> with('proveedores', $proveedores)
        -> with('articulosProveedor',$articulosProveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticulosProveedor  $articulosProveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulosProveedor = ArticulosProveedor::find($id);
        $articulosProveedor->id_inventario=$request->inventario; 
        $articulosProveedor->id_proveedor=$request->proveedor;
        $articulosProveedor->codigoArticulo=$request->codigoArticulo;
        $articulosProveedor->descripcionRol=$request->descripcionRol;
        $articulosProveedor->fechaInicio=$request->fechaInicio;
        $articulosProveedor->fechaFinal=$request->fechaFinal;
        $articulosProveedor->precio=$request->precio;
        $articulosProveedor->periodoPago=$request->periodoPago;
        $articulosProveedor->descuento=$request->descuento;
        $articulosProveedor->tiempoEntrega=$request->tiempoEntrega;


        $articulosProveedor->save();

        return redirect()->route('articulosProveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticulosProveedor  $articulosProveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulosProveedor = ArticulosProveedor::find($id);
        $articulosProveedor->delete();
        return redirect()->route('articulosProveedores.index');
    }
}
