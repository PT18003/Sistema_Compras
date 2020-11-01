@extends('layouts.app')
@section('title','Agregar Departamento')
@section('content')


<h1>Agregar Departamento</h1>
              {{-- insertamos la ruta que pusimos como nombre. --}}
<form action="{{route('departamentos.guardar')}}" method="POST">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" name="departamento" placeholder="Nombre del departamento de El Salvador ">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection