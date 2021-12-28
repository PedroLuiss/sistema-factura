@extends('layouts.app')
@section('content')
@if(Auth::user()->rol == 'admin')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">Lista de Clientes</h4>
              <div class="table-responsive-sm mt-4">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;">
                        <input type="text" tabindex="0"></div>
                        <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 17.7344px;">#</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 53.2617px;">Nombre</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 123.457px;">Apellido</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 174.688px;">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 174.688px;">rol</th>
                    </tr>
                  </thead>
                  <tbody>                    
                          @foreach($users as $user)
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->rol}}</td>
                      </tr>
                      @endforeach
                 </tbody>
              </table>
            </div>
          </div>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
</div>
@else
<div class="row">
    <div class="col-xl-12">
        <div class="card">
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card-header">
<h4 class="mb-3 header-title">realizar compra</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'user.add']) !!}
            <div class="form-group col-md-6">
                <label class="control-label" for="id_detalle">Producto</label>
                {{ Form::select('id_producto', $productos,null,['class' => 'form-control','placeholder' => 'Selecciona un Producto'])}}
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Comprar Producto</button>
            </div>
              {!! Form::close()!!}

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endif


@endsection