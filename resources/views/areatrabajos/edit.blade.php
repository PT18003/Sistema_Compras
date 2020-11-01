@extends('layouts.app')
@section('title','Editar Area de Trabajo')
@section('content')


<h1>Editar area de trabajo</h1>

<form action="{{route('areatrabajos.actualizar',$id)}}" method="POST" autocomplete="off">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    @method('put')
    <div class="form-row">
      <div class="col">
      <input type="text" class="form-control" name="nombreDep" value="{{$id->nombreDep}}" placeholder="Nombre del area de trabajo">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection