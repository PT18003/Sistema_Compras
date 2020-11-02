@extends('layouts.app')
@section('title','Estados Civiles')
@section('content')
<h1>Estados Civiles</h1>
<a class="btn btn-primary" href="{{route('estadosciviles.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Estado Civil</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estadosciviles as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombreEstado}}</td>
            <td>
            <a href="{{route('estadosciviles.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="{{route('estadosciviles.destroy',$item)}}"><i class="material-icons md-18">delete</i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection