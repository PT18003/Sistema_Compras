@extends('layouts.app')
@section('title','Editar Departamento')
@section('content')


<h1>Editar departamento</h1>

<form action="{{route('departamentos.actualizar',$departamento)}}" method="POST" autocomplete="off">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    @method('put')
    <div class="form-row">
      <div class="col">
      <input type="text" class="form-control" name="departamento" value="{{$departamento->departamento}}" placeholder="Nombre del area de trabajo">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection