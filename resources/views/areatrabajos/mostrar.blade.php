@extends('layouts.app')
@section('title','Areas de Trabajo')
@section('content')


<h1>Areas de Trabajo</h1>

<a class="btn btn-primary" href=" {{route('areatrabajos.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($areastrabajo as $item)
        <tr>
        <!---
                 route('areatrabajos.show',$areatrabajo->id) 
                -->
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombreDep}}</td>
            <td>
                <a href="{{route('areatrabajos.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $areastrabajo->links() }}
@endsection