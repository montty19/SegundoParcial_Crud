@extends('layouts.plantillabase');

@section('contenido')

<table class="table table-dark table-striped mt-4">
          <thead class="thead-inverse">
            <tr>
              
              <th scope="col">Producto</th>
              <th scope="col">Id Marca</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio Costo</th>
              <th scope="col">Precio Venta</th>
              <th scope="col">Existencia</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
           
<tbody>
    @foreach($productos as $producto)
    <tr>
        
        <td>{{$producto->producto}}</td>
        <td>{{$producto->idMarca}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->precio_costo}}</td>
        <td>{{$producto->precio_venta}}</td>
        <td>{{$producto->existencia}}</td>
         <td>
         <form action ="{{ route ('productos.destroy',$producto->id)}}" method="POST">
            <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
        </tr>
    @endforeach
</tbody>
</table>

<div align="center">
<font size="1000px"><a href="productos/create" class="btn btn-warning" >Agregar</a></font>
</div>

@endsection