@extends('layouts.app')
@section('title','Municipios')
@section('content')


<h1>Municipios</h1>

<a class="btn btn-primary" href="{{route('municipios.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Departamento</th>
            <th scope="col">Municipio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($municipios as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->departamentos->departamento}}</td>
            <td>{{$item->municipio}}</td>
            <td>
            <a href="{{route('municipios.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="{{route('municipios.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $municipios->links() }}
@endsection