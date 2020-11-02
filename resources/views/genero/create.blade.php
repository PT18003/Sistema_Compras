@extends('layouts.app')
@section('title','Agregar Generos')
@section('content')


<h1>Agregar Genero</h1>
<form action="{{route('generos.guardar')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-md-4">
        <label for="genero">Genero</label>
        <input id="genero" type="text" class="form-control" name="genero" placeholder="Nombre del Genero de El Salvador ">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection