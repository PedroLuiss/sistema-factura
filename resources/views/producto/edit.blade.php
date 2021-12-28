@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Productos</a></li>
                      <li class="breadcrumb-item "><a href="#">Index</a></li>
                      <li class="breadcrumb-item active">Editar</li>
                  </ol>                 
              
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>
<div class="container ">
    <div class="card">
        <div class="card-header">        
    <h3>EDITAR PRODUCTO</h3>
        <div class="page">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div> 
        </div>
          <form action="{{route('producto.update', $Producto->id)}}" method="POST"  autocomplete="off">
                @method('PATCH')
                @csrf            
         <div class="card-body">
            <div class="row">                    
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese El nombre del Producto" value="{{ $Producto->nombre }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="precio">PRECIO</label>
                        <input type="number" name="precio" class="form-control" placeholder="Ingrese el precio" value="{{ $Producto->precio }}">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-12">
                        <label for="impuesto">IMPUESTO</label>
                        <input type="number"  name="impuesto" class="form-control" required placeholder="Ingrese El impuesto" value="{{ $Producto->impuesto }}">
                    </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row"> 
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a  href="{{ url('producto') }}" class="btn btn-danger">Cancelar</a>
                </div>                
            </div>
        </div>
      </form>
    
    </div>   
</div>
@endsection
