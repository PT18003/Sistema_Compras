@extends('layouts.app')
@section('title','Editar Municipio')
@section('content')


<h1>Editar municipio</h1>

<form action="{{route('municipios.actualizar',$municipio)}}" method="POST" autocomplete="off">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    @method('put')
    <div class="form-row">
        <div class="col-md-4">
            <label for="municipio">Municipio</label>
            <input id="municipio" type="text" class="form-control" name="municipio" value="{{$municipio->municipio}}" placeholder="Nombre del Municipio de El Salvador ">
          </div>
    <div class="form-group col-md-4">
        <label for="departamento">Departamento</label>
        <select id="departamento" name="departamento" class="form-control">
          <option selected>Seleccione</option>
          @foreach ($departamento as $item)
            <option @if ($item->id==$municipio->id_departamento)
                selected
            @endif value="{{$item->id}}">{{$item->departamento}}</option>
          @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection