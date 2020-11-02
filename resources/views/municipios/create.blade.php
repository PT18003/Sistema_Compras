@extends('layouts.app')
@section('title','Agregar Municipios')
@section('content')


<h1>Agregar Municipio</h1>
<form action="{{route('municipios.guardar')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-md-4">
        <label for="municipio">Municipio</label>
        <input id="municipio" type="text" class="form-control" name="municipio" placeholder="Nombre del Municipio de El Salvador ">
      </div>
      <div class="form-group col-md-4">
        <label for="departamento">Departamento</label>
        <select id="departamento" name="departamento" class="form-control">
          <option selected>Seleccione</option>
          @foreach ($departamentos as $item)
            <option value="{{$item->id}}">{{$item->departamento}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection