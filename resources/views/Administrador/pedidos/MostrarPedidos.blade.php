@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">

    <div class="row mt-2">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Pedidos Registrados</strong></h3>
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                </div>
                <a href="{{route('PDF')}}"><button class="btn btn-danger mb-2 ml-2"><i style="margin-right:5px;" class="fas fa-file-import"></i>Generar PDF</button></a>

            </div>

           


            <table class="table table-bordered data-table" id="pedidos">

                <thead>

                    <tr>

                            <th>Id Pedido</th>
                            <th>Identificacion del cliente</th>
                            <th>Nombre cliente</th>
                            <th>Apellido del cliente</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Productos</th>
                            <th>Cantidad</th>
                            <th>Talla</th>
                            <th>Metodo de pago</th>
                            <th>Direccion</th>
                            <th>Valor</th>
                            <th>Fecha</th>
                            <th>Estado pedido</th>
                        
                        <th width="220px">Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach($pedidos as $pedido)
                           <tr>
                            <td>{{$pedido->Id_Pedido}}</td>
                            <td>{{$pedido->identificacion}}</td>
                            <td>{{$pedido->name}}</td>
                            <td>{{$pedido->apellido}}</td>
                            <td>{{$pedido->telefono}}</td>
                            <td>{{$pedido->email}}</td>
                               <td>
                                   @foreach ($productos as $p)
                                      @if($p->id == $pedido->id_producto)
                                       {{$p->nombre}}
                                      @endif 
                                   @endforeach
                                </td>
                                <td>
                                   @foreach($pedidosT as $pedidosDb)
                                   @if ($pedidosDb->Id_Pedido == $pedido->id_pedido)
                                       <p>{{$pedido->cantidad}}</p>
                                   @endif
                                   @endforeach
                                 
                                </td>
                               <td>@foreach ($pedidosT as $pedidosDb)
                                     @if ($pedidosDb->Id_Pedido == $pedido->id_pedido)
                                       <p>{{$pedido->talla}}</p>
                                     @endif
                                   @endforeach
                                  
                               </td>
                               <td>{{$pedido->Tipo_Pago}}</td>
                               <td>{{$pedido->Direccion}}</td>
                               <td>{{$pedido->Total}}</td>
                               <td>{{$pedido->Fecha}}</td>
                               <td> 
                                   @foreach ($estadoPedido as $item)
                                   @if($pedido->id_estado == $item->Id_Estado)
                                    {{$item->Estado}}
                                   @endif   
                                   @endforeach
                               </td>
                               <td>
                                   <a href="{{url('/Administrador/productos/MostrarPedidos/'.$pedido->Id_Pedido)}}" class="btn btn-dark">Cambiar Estado Pedido</a>
                               </td>
                           </tr>
                           @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@stop

@section('js')

  <script>
    $(document).ready(function () {
        $('#pedidos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

            }

        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@stop