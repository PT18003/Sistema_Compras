@extends('layouts.app')
@section('title','Empleados')
@section('content')
<h1>Empleados</h1>
<a class="btn btn-primary" href="{{route('empleados.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
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
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->direccion}}, {{$item->municipio->municipio}}, {{$item->municipio->departamentos->departamento}}</td>
            <td>{{$item->genero->genero}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->areatrabajo->nombreDep}}</td>
            <td>
            <a href="{{route('empleados.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="{{route('empleados.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection