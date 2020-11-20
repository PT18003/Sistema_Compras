@extends('layouts.app')
@section('title','Agregar Nuevo Proveedor')
@section('content')


<h1>Agregar Proveedor</h1>
<div class="container">
    <form action="{{route('proveedores.store')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-3">
                <label for="departamento">Departamento</label>
                <select class="custom-select mr-sm-2" id="departamento" name="departamento" >
                    <option selected>Seleccione</option>
                    @foreach ($departamentos as $item)
                    <option value="{{$item->id}}">{{$item->departamento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="municipio">Municipio</label>
                <select class="custom-select mr-sm-2" id="municipio" name="municipio" >
                    @foreach ($municipios as $item)
                    <option selected>Seleccione</option>
                   <option value="{{$item->id}}">{{$item->municipio}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="direccion">Direccion</label>
                <input id="direccion" type="text" class="form-control" name="direccion" placeholder="direccion">
            </div>
            
            <div class="form-group col-md-2">
                <label for="telefono">Telefono</label>
                <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
            <div class="form-group col-md-2">
                <label for="correo">Correo</label>
                <input id="correo" type="text" class="form-control" name="correo" placeholder="correo">
            </div>
             <div class="form-group col-md-2">
                <label for="nit">NIT</label>
                <input id="nit" type="text" class="form-control" name="nit" placeholder="nit">
            </div>
            <div class="form-group col-md-2">
                <label for="montoMin">Monto Minimo</label>
                <input id="montoMin" type="number" class="form-control" name="montoMin" placeholder="montoMin">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>

@endsection