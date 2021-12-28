@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Producto</a></li>
                      <li class="breadcrumb-item "><a href="#">Index</a></li>
                      <li class="breadcrumb-item active">Nuevo</li>
                  </ol>                 
              
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>
<div class="container ">
        <div class="card">
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
        <div class="card-header">
            <h3>AGREGAR PRODUCTO</h3>
        </div>
    {!! Form::open(['route' => 'producto.store']) !!}            
         <div class="card-body">
            <div class="row">                    
                    <div class="form-group col-md-6">
                        <label for="nombre">NOMBRE</label>
                        <input  type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Ingrese El nombre del producto">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="precio">PRECIO</label>
                        <input type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" placeholder="Ingrese el precio" value="{{ old('cantidad') }}">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-12">
                        <label for="impuesto">IMPUESTO</label>
                        <input  type="number"  name="impuesto" class="form-control @error('impuesto') is-invalid @enderror" placeholder="Ingrese el impuesto "value="{{ old('precio') }}">
                    </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row"> 
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a  href="{{ route('producto.index') }}" class="btn btn-danger">Cancelar</a>
                </div>                
            </div>
        </div>
      {!! Form::close()!!}
    
    </div>
</div>
</div>
@endsection