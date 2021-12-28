@extends('layouts.app')
@section('content')
    <div class="content-header">
      <div class="row ">
        <div class="col-xl-12" >
            <div class="card">
                <div class="card-body-header">                
                  <ol class="breadcrumb float-sm-right alignToTitle">
                      <li class="breadcrumb-item"><a href="#">Factura</a></li>
                      <li class="breadcrumb-item ">Index</li>
                      <li class="breadcrumb-item active">detalles</li>
                  </ol>      
                </div> <!-- end card body-->
            </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
    <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="card bg-light">
                                    <div class="px-5 pt-2">
                                            <img src="{{ asset('img/placeholder.png') }}" class="rounded-5 card-img-top" alt="Profile photo">

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data['user']['name'].' '.$data['user']['apellido']}}</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Correo: {{$data['user']['email']}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="p-3 mb-3 border rounded bg-white">
                                    <h4>Lista de Productos</h4>
                                    <table class="table table-responsive mt-3">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 30.7344px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 350.2617px;">Producto</th>
                                                <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.4883px;">Precio</th>
                                                <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 80.4883px;">Impuesto</th>
                                                <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 200.4883px;">Fecha</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                        @php 
                                         $i=1;
                                        @endphp
                                        @foreach($data['productos'] as $producto)

                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$producto->nombre}}</td>
                                                <td>{{$producto->precio}}</td>
                                                <td>{{$producto->impuesto}}</td>
                                                <td>{{$producto->fecha_compra}}</td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>

                                    <h5>Monto total: {{$data['factura']['monto_total']}}</h5>
                                    <h5>Impuesto total: {{$data['factura']['impuesto_total']}}</h5>
                                </div>
                            </div>

                        </div>  
    

@endsection
