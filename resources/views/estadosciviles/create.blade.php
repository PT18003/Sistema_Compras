@extends('layouts.app')
@section('title','Agregar Estados Civiles')
@section('content')


<h1>Agregar Estado Civil</h1>
<form action="{{route('estadosciviles.guardar')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-md-4">
        <label for="estadocivil">Estado Civil</label>
        <input id="estadocivil" type="text" class="form-control" name="estadocivil" placeholder="Estado Civil ">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endsection