@extends('layouts.app')
@section('title','Empleados')
@section('content')
<h1>Empleados</h1>
<a class="btn btn-primary" href="{{route('empleados.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" >id</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Direccion</th>
            <th scope="col">Genero</th>
            <th scope="col">Telefono</th>
            <th scope="col">Area de trabajo</th>
            <th scope="col">Acciones</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $item)
        <tr>
            <th scope="row" id="ver" data-toggle="modal" data-target="#staticBackdrop">{{$item->id}}</th>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->direccion}}, {{$item->municipio->municipio}}, {{$item->municipio->departamentos->departamento}}</td>
            <td>{{$item->genero->genero}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->areatrabajo->nombreDep}}</td>
            <td>
            <a href="{{route('empleados.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="{{route('empleados.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
            <a id="ver" data-toggle="modal" data-target="#staticBackdrop"><i class="material-icons md-18">preview</i></a>
        </td>
        </tr>
        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="nombre"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
        @endforeach
    </tbody>
</table>
@endsection