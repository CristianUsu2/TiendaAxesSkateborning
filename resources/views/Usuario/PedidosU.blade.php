@extends('Layout.plantillaU')
@section('paginas')
<div class="cart-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Id Pedido</th>
                            <th class="pro-title">Productos</th>
                            <th class="pro-title">Cantidad</th>
                            <th class="pro-title">Talla</th>
                            <th class="pro-title">Metodo de pago</th>
                            <th class="pro-title">Direccion</th>
                            <th class="pro-title">Valor</th>
                            <th class="pro-title">Fecha</th>
                            <th class="pro-title">Estado pedido</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($pedidos!=null)
                           @foreach($pedidos as $pedido)
                           <tr>
                               <td>{{$pedido->Id_Pedido}}</td>
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
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                       
                    </table>
                   
                </div>

            </div>
        </div>
        {{$pedidos->links()}}
@endsection
