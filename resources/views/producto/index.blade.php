@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
          <div class="col-xl-12">
              <div class="card">
                  <div class="card-body-header">
                      <a href="{{ route('producto.create')}}" class="btn btn-outline-primary btn-rounded mt-2"><i class="mdi mdi-plus"></i>Agregar</a>
                      <ol class="breadcrumb float-sm-right alignToTitle">
                          <li class="breadcrumb-item"><a href="#">Productos</a></li>
                          <li class="breadcrumb-item active">Index</li>
                      </ol>

                  </div> <!-- end card body-->
              </div> <!-- end card -->
          </div><!-- end col-->
      </div>

    </div>

    <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title">productos</h4>
              <div class="table-responsive-sm ">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;">
                        <input type="text" tabindex="0"></div>
                        <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 11.7344px;">#</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width:140.688px;">Nombres</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.4883px;">Precio</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 65.4883px;">Impuesto</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width:70.2617px;">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>                    
                             @foreach($productos as $producto)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>
                                        {{$producto->nombre}}
                                    </td>
                                    <td>{{$producto->precio}}</td>
                                    <td>{{$producto->impuesto}}</td>
                                    <td>
                                        <a href="{{route('producto.edit',$producto->id)}}" class="btn btn-outline-success">
                                            <i class="mdi mdi-pencil-outline"></i>
                                        </a>
                                        {!! Form::open(['action' => ['ProductoController@destroy', $producto->id],'method' => 'DELETE']) !!}
                                        {{ Form::token() }}
                                            <button class="btn btn-outline-danger" onclick="return confirm('Eliminar Registro?')">
                                                <i class="mdi mdi-window-close"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
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


@endsection