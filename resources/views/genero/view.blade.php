@extends('layouts.app')
@section('title','Generos')
@section('content')
<h1>Generos</h1>
<a class="btn btn-primary" href="{{route('generos.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Genero</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($generos as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->genero}}</td>
            <td>
            <a href="{{route('generos.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="{{route('generos.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection