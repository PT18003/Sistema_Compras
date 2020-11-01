@extends('layouts.app')
@section('title','Agregar Area de Trabajo')
@section('content')


<h1>Agregar nueva area de trabajo</h1>

<form action="{{route('areatrabajos.guardar')}}" method="POST">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" name="nombreDep" placeholder="Nombre del area de trabajo">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection