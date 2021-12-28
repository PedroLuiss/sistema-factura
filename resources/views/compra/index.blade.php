@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
          <div class="col-xl-12">
              <div class="card">
                  <div class="card-body-header">
                      <ol class="breadcrumb float-sm-right alignToTitle">
                          <li class="breadcrumb-item"><a href="#">Compras</a></li>
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
              <h4 class="mb-3 header-title">COMPRAS PENDIENTES</h4>
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
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 65.4883px;">Cliente</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65.4883px;">Monto Total</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 40.4883px;">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>                   
                    @for($i = 0; $i <= count($data['compras']);$i++)
                      @if(isset($data['compras'][$i]['nombre']) && (!$data['compras'][$i]['sumaprecio'] == 0))
                        <tr>
                            <td>{{$data['compras'][$i]['id_user']}}</td>                           
                            <td>{{$data['compras'][$i]['nombre'].' '.$data['compras'][$i]['apellido']}}</td>
                            <td>{{$data['compras'][$i]['sumaprecio']}}</td>
                            <td>
                                {!! Form::open(['action' => ['FacturaController@store'],'method' => 'POST']) !!}
  
                                {!! Form::hidden('id_user', $data['compras'][$i]['id_user']) !!}
                                {!! Form::hidden('montototal', $data['compras'][$i]['sumaprecio']) !!}
                                {!! Form::hidden('impuestototal', $data['compras'][$i]['sumaimpuesto']) !!}
                                    <button class="btn btn-outline-info" onclick="return confirm('Estas Seguro De Generar Esta Factura?')">
                                        Generar Facturas
                                    </button>
                                {!! Form::close() !!}
                                {{-- <a href="">
                                    <button type="button" class="btn btn-outline-info">
                                        Generar Facturas
                                    </button> 
                                </a>  --}}
                            </td>
                        </tr>
                      @endif
                    @endfor
                         </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

@endsection