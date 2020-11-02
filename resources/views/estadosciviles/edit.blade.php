@extends('layouts.app')
@section('title','Editar Estado Civil')
@section('content')


<h1>Editar Estado Civil</h1>

<form action="{{route('estadosciviles.actualizar',$estadocivil)}}" method="POST" autocomplete="off">
    @csrf<!-- para crear un token oculto por temas de seguridad  -->
    @method('put')
    <div class="form-row">
        <div class="col-md-4">
            <label for="estadocivil">Estado Civil</label>
            <input id="estadocivil" type="text" class="form-control" name="estadocivil" value="{{$estadocivil->nombreEstado}}" placeholder="Estado Civil">
          </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection