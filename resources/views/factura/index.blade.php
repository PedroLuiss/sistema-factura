@extends('layouts.app')
@section('content')

    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Facturas</a></li>
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
              <h4 class="mb-3 header-title">LISTA DE FACTURA</h4>
              <div class="table-responsive-sm ">
                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div style="position: absolute; height: 1px; width: 0px; overflow: hidden;">
                        <input type="text" tabindex="0"></div>
                        <table id="basic-datatable" class="table table-striped table-centered mb-0 dataTable no-footer" role="grid" aria-describedby="basic-datatable_info" style="position: relative;">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 70.2617px;">Nº Factura</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.4883px;">Fecha</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 65.4883px;">Monto</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65.4883px;">Cliente</th>
                      <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 40.4883px;">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data['facturas'] as $factura)
                     <tr>
                            <td>{{$factura->id}}</td>
                            <td>{{$factura->created_at}}</td>
                            <td>{{$factura->monto_total}}</td>
                            <td>{{$factura->name.' '.$factura->apellido}}</td>
                            <td>
                                <a href="{{route('factura.show', ['id' => $factura->id])}}">
                                    <button type="button" class="btn btn-outline-info">
                                        ver
                                    </button> 
                                </a> 
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