@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')


@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Editar Estado Pedido</strong></h3>
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                </div>

            </div>
         
            

        </div>
        
         <div class="col-lg-12">
            <form action="{{url('/Administrador/productos/MostrarPedidos')}}" method="POST">
                @csrf
                <div class="row">
                    @foreach($pedidos as $pedido)
                    <div class="col-6"> 
                        <label>Id Pedido</label>
                        <input type="number" name="idpedido" disabled class="form-control"  value="{{$pedido->Id_Pedido}}"/>
                      </div>  
                    <div class="col-6"> 
                       <label>Identificacion del cliente</label>
                       <input type="text" name="nombre" disabled class="form-control" id="nombre" value="{{$pedido->identificacion}}"/>
                     </div>  
                     <div class="col-6 mt-2">
                       <label>Nombre cliente</label>
                       <input type="text" name="stock"  disabled class="form-control" value="{{$pedido->name}}"/>
                     </div>
                     <div class="col-6 mt-2">
                        <label>Apellido cliente</label>
                        <input type="text" name="precio" disabled class="form-control" value="{{$pedido->apellido}}" />
                     </div>
                     <div class="col-12 mt-2">
                         <label>Telefono</label>
                         <input type="text" name="descuento" disabled class="form-control" value="{{$pedido->telefono}}"/>
                     </div>
                     <div class="col-12"> 
                       <label>Correo</label>
                       <input type="text" name="descripcion" disabled class="form-control" id="desc" value="{{$pedido->email}}" />
                     </div> 
                     <div class="col-6"> 
                        <label>Metodo de pago</label>
                        <input type="text" name="descripcion" disabled class="form-control" id="desc" value="{{$pedido->Tipo_Pago}}" />
                      </div> 
                      <div class="col-6"> 
                        <label>Direccion</label>
                        <input type="text" name="descripcion" disabled class="form-control" id="desc" value="{{$pedido->direccion}}" />
                      </div> 
                      <div class="col-6"> 
                        <label>Valor</label>
                        <input type="text" name="descripcion" disabled class="form-control" id="desc" value="{{$pedido->Total}}" />
                      </div> 
                      <div class="col-6"> 
                        <label>Fecha</label>
                        <input type="text" name="descripcion" disabled class="form-control" id="desc" value="{{$pedido->fecha}}" />
                      </div> 
                     <div class="col-4 mt-2" id="divColor">
                         <label>Escoger Estado de pedido</label>
                         <select class="custom-select" id="colores"  name="estadoPedido">
                           <option>Escoger Estado de pedido</option>
                           @foreach ($estadoPedido as $item)
                             <option value="{{$item->Id_Estado}}">{{$item->Estado}}</option>
                           @endforeach
                            
                         </select>
                         <!--<input type="hidden" name="color" id="color"/>-->
                     </div>
                     <input type="hidden" name="idpedido" value="{{$pedido->Id_Pedido}}"/>
               </div>
                 <button type="submit" class="btn btn-success mt-3 mr-2 mb-3">Enviar</button>
                 <a href="{{url('/Administrador/productos/MostrarPedidos')}}" class="btn btn-primary mt-3 mb-3">Cancelar</a>
                 @break;
                 @endforeach
                </form>      
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
        $('#usuarios').DataTable({
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