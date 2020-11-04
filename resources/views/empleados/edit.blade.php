@extends('layouts.app')
@section('title','Editar Empleado')
@section('content')


<h1>Editar Empleado</h1>
<div class="container">
    <form action="{{route('empleados.actualizar',$empleado)}}" method="POST" autocomplete="off">
        @csrf<!-- para crear un token oculto por temas de seguridad  -->
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nombres">Nombres</label>
            <input id="nombres" type="text" class="form-control" value="{{$empleado->nombres}}" name="nombres" placeholder="Nombres ">
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos">Apellidos</label>
                <input id="apellidos" type="text" class="form-control"  value="{{$empleado->apellidos}}"name="apellidos" placeholder="Apellidos">
            </div>
            <div class="form-group col-md-4">
                <label for="genero">Genero</label>
                <select class="custom-select mr-sm-2" id="genero" name="genero">
                    <option selected>Seleccione</option>
                    @foreach ($generos as $item)
                    <option @if ($item->id==$empleado->genero_id)
                        selected
                    @endif value="{{$item->id}}">{{$item->genero}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="estadocivil">Estado civil</label>
                <select class="custom-select mr-sm-2" id="estadocivil" name="estadocivil">
                    <option selected>Seleccione</option>
                    @foreach ($estadocivil as $item)
                    <option @if ($item->id==$empleado->estadocivil_id)
                        selected
                    @endif value="{{$item->id}}">{{$item->nombreEstado}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="departamento">Departamento</label>
                <select class="custom-select mr-sm-2" id="departamento" name="departamento" >
                    <option selected>Seleccione</option>
                    @foreach ($departamentos as $item)
                    <option @if ($item->id==$empleado->municipio->departamentos->id)
                        selected
                    @endif value="{{$item->id}}">{{$item->departamento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="municipio">Municipio</label>
                <select class="custom-select mr-sm-2" id="municipio" name="municipio" >
                    <option value=0 selected>Seleccione</option>
                    <option id="municipio" ></option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="direccion">Direccion</label>
                <input id="direccion" type="text" class="form-control"  value="{{$empleado->direccion}}" name="direccion" placeholder="Direccion: ej. #calle, #pasaje, Av.">
            </div>
            <div class="form-group col-md-2">
                <label for="telefono">Telefono</label>
                <input id="telefono" type="text" class="form-control"  value="{{$empleado->telefono}}" name="telefono" placeholder="Telefono">
            </div>
            <div class="form-group col-md-2">
                <label for="dui">DUI</label>
                <input id="dui" type="text" class="form-control"  value="{{$empleado->dui}}" name="dui" placeholder="DUI, sin guion">
            </div>
            <div class="form-group col-md-2">
                <label for="salario">Salario</label>
                <input id="salario" type="number" class="form-control"  value="{{$empleado->salario}}" name="salario" placeholder="Salario USD">
            </div>
            <div class="form-group col-md-2">
                <label for="vencimientoContrato">Vencimiento de contrato</label>
                <input id="vencimientoContrato" type="date" class="form-control"  value="{{$empleado->vencimientoContrato}}" name="vencimientoContrato" placeholder="Vencimiento de contrato">
            </div>
            <div class="form-group col-md-4">
                <label for="areatrabajo">Area de trabajo</label>
                <select class="custom-select mr-sm-2" id="areatrabajo" name="areatrabajo">
                    <option selected>Seleccione</option>
                    @foreach ($areatrabajo as $item)
                    <option @if ($item->id==$empleado->areatrabajo_id)
                        selected
                    @endif value="{{$item->id}}">{{$item->nombreDep}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection