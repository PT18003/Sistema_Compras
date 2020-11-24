@extends('layouts.app')
@section('title','ArticulosProveedores')
@section('content')
<h1>Articulos Proveedores</h1>
<a class="btn btn-primary" href="{{route('articulosProveedores.create')}}" role="button">Agregar</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" >id</th>
            <th scope="col">Inventario</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Codigo articulo</th>
            <th scope="col">Descripcion de Rol </th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Fecga Final</th>
            <th scope="col">Precio</th>
            <th scope="col">Periodo de pago</th>
            <th scope="col">Descuento</th>
            <th scope="col">Tiempo de entrega</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulosProveedores as $item)
        <tr>
            <th scope="row" id="ver" data-toggle="modal" data-target="#staticBackdrop">{{$item->id}}</th>
            <td>{{$item->inventario->nombre}}</td>
            <td>{{$item->proveedor->nombre}}</td>
            <td>{{$item->codigoArticulo}}</td>
            <td>{{$item->descripcionRol}}</td>
            <td>{{$item->fechaInicio}}</td>
            <td>{{$item->fechaFinal}}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->periodoPago}}</td>
            <td>{{$item->descuento}}</td>
            <td>{{$item->tiempoEntrega}}</td>
            <td>
            <a href="{{route('articulosProveedores.edit',$item->id)}}"><i class="material-icons md-18">edit</i></a>
            <a href="" data-toggle="modal" data-target="#staticBackdrop"><i class="material-icons md-18">delete</i></a>
            <a id="ver" data-toggle="modal" data-target=""><i class="material-icons md-18">preview</i></a>
        </td>
        </tr>
        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="{{route('articulosProveedores.destroy',$item->id)}}" method="delete" autocomplete="off">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Articulo-Proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="nombre">¿Desea dar de baja al Articulo-Proveedor: {{$item->codigoArticulo}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</form>
        @endforeach
    </tbody>
</table>
@endsection