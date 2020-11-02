@extends('layouts.app')
@section('title','Editar Genero')
@section('content')


<h1>Editar genero</h1>

<form action="{{route('generos.actualizar',$genero)}}" method="POST" autocomplete="off">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    @method('put')
    <div class="form-row">
        <div class="col-md-4">
            <label for="genero">Genero</label>
            <input id="genero" type="text" class="form-control" name="genero" value="{{$genero->genero}}" placeholder="Genero">
          </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection