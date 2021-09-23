@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar registro</h2>

<form action="/productos/{{$producto->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
          <label for="lbl_producto" class="form-label"><b>Producto</b></label>
          <input type="text" name="txt_producto" id="txt_producto" class="form-control" placeholder="Producto: Cola-Cola" value="{{$producto->producto}}">
          </div>

          <div class="mb-3">
          <label for="lbl_idMarca" class="form-label"><b>Id Marca</b></label>
          <input type="text" name="txt_idMarca" id="txt_idMarca" class="form-control" placeholder="Id Marca:  1 = Coca Cola    2 = Hersey    3 = Kerns" value="{{$producto->idMarca}}">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>Descripcion</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Descripcion: Descripcion del Producto  " value="{{$producto->descripcion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_costo" class="form-label"><b>Precio Costo</b></label>
          <input type="text" name="txt_precio_costo" id="txt_precio_costo" class="form-control" placeholder="Precio Costo: 1 2.56 10.20 " value="{{$producto->precio_costo}}">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_venta" class="form-label"><b>Precio Venta</b></label>
          <input type="text" name="txt_precio_venta" id="txt_precio_venta" class="form-control" placeholder="Precio Venta: 1 2.56 10.20" value="{{$producto->precio_venta}}">
          </div>

          <div class="mb-3">
          <label for="lbl_existencia" class="form-label"><b>Existencia</b></label>
          <input type="text" name="txt_existencia" id="txt_existencia" class="form-control" placeholder="Existencia: 23 4 6 897" value="{{$producto->existencia}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Modificar">
          <a href="/productos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>


@endsection