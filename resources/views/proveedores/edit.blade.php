@extends('layouts.app')
@section('title','Editar Empleado')
@section('content')


<h1>Editar Proveedor</h1>
<div class="container">
    <form action="{{route('proveedores.update',$proveedor)}}" method="POST" autocomplete="off">
        @csrf<!-- para crear un token oculto por temas de seguridad  -->
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nombre">Nombres</label>
            <input id="nombre" type="text" class="form-control" value="{{$proveedor->nombre}}" name="nombre" placeholder="Nombre ">
            </div>
             <div class="form-group col-md-3">
                <label for="departamento">Departamento</label>
                <select class="custom-select mr-sm-2" id="departamento" name="departamento" >
                    <option selected>Seleccione</option>
                    @foreach ($departamentos as $item)
                    <option @if ($item->id==$proveedor->municipio->departamentos->id)
                        selected
                    @endif value="{{$item->id}}">{{$item->departamento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="municipio">Municipio</label>
                <select class="custom-select mr-sm-2" id="municipio" name="municipio" >
                    <option value=0 selected>Seleccione</option>
                   @foreach ($municipios as $item)
                    <option @if ($item->id==$proveedor->municipio->id)
                        selected
                    @endif value="{{$item->id}}">{{$item->municipio}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="direccion">Direccion</label>
                <input id="direccion" type="text" class="form-control"  value="{{$proveedor->direccion}}"name="direccion" placeholder="Direccion">
            </div>
            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input id="telefono" type="text" class="form-control"  value="{{$proveedor->telefono}}"name="telefono" placeholder="telefono">
            </div>
            <div class="form-group col-md-4">
                <label for="correo">Correo</label>
                <input id="correo" type="text" class="form-control"  value="{{$proveedor->correo}}"name="correo" placeholder="correo">
            </div>
                <div class="form-group col-md-4">
                <label for="nit">NIT</label>
                <input id="nit" type="text" class="form-control"  value="{{$proveedor->nit}}"name="nit" placeholder="nit">
            </div>
                <div class="form-group col-md-4">
                <label for="montoMin">Monto minimo</label>
                <input id="montoMin" type="number" class="form-control"  value="{{$proveedor->montoMin}}"name="montoMin" placeholder="montoMin">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection