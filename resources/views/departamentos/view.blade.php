@extends('layouts.app')
@section('title','Departamentos')
@section('content')


<h1>Departamentos</h1>

<a class="btn btn-primary" href="{{route('departamentos.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departamentos as $item)
        <tr>
        <!---
                 route('areatrabajos.show',$areatrabajo->id) 
                -->
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->departamento}}</td>
            <td>
                <a href="{{route('departamentos.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
                {{-- BOTON PARA BORRAR, pero usa un GET --}}
                <a href="{{route('departamentos.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
                {{-- BOTON PARA BORRAR, pero usa un POST con el metodo DELETE DEL ROUTE --}}
                {{--             
                <form action="{{route('departamentos.destroy',$item)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="material-icons md-18">delete</i></button>
                </form> 
                --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $departamentos->links() }}
@endsection