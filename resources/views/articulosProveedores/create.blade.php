@extends('layouts.app')
@section('title','Agregar Nuevo Articulo-Proveedor')
@section('content')


<h1>Agregar Articulo-Proveedor</h1>
<div class="container">
    <form action="{{route('articulosProveedores.store')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inventario">Inventario</label>
                <select class="custom-select mr-sm-2" id="inventario" name="inventario" >
                    <option selected>Seleccione</option>
                    @foreach ($inventarios as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="proveedor">Proveedor</label>
                <select class="custom-select mr-sm-2" id="proveedor" name="proveedor" >
                    @foreach ($proveedores as $item)
                    <option selected>Seleccione</option>
                   <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="codigoArticulo">Codigo Articulo</label>
                <input id="codigoArticulo" type="text" class="form-control" name="codigoArticulo" placeholder="codigoArticulo">
            </div>
            
            <div class="form-group col-md-2">
                <label for="descripcionRol">Descripcion Rol</label>
                <input id="descripcionRol" type="text" class="form-control" name="descripcionRol" placeholder="descripcionRol">
            </div>
            <div class="form-group col-md-2">
                <label for="fechaInicio">Fecha Inicio</label>
                <input id="fechaInicio" type="date" class="form-control" name="fechaInicio" placeholder="fechaInicio">
            </div>
            <div class="form-group col-md-2">
                <label for="fechaFinal">Fecha Inicio</label>
                <input id="fechaFinal" type="date" class="form-control" name="fechaFinal" placeholder="fechaFinal">
            </div>
             <div class="form-group col-md-2">
                <label for="precio">precio</label>
                <input id="precio" type="number" class="form-control" name="precio" placeholder="precio">
            </div>
            <div class="form-group col-md-2">
                <label for="periodoPago">periodoPago</label>
                <input id="periodoPago" type="text" class="form-control" name="periodoPago" placeholder="periodoPago">
            </div>
            <div class="form-group col-md-2">
                <label for="descuento">Descuento</label>
                <input id="descuento" type="number" class="form-control" name="descuento" placeholder="descuento">
            </div>
            <div class="form-group col-md-2">
                <label for="tiempoEntrega">Tiempo Entrega</label>
                <input id="tiempoEntrega" type="time" class="form-control" name="tiempoEntrega" placeholder="tiempoEntrega">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>

@endsection