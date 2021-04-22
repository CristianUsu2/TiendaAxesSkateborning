@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">

    <div class="row mt-2">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Tallas Registradas</strong></h3>

                </div>
               <button class="btn btn-success mb-2 ml-2" data-toggle="modal" data-target="#btnUsuario"><i style="margin-right:5px;" class="fas fa-plus"></i>Crear Talla</button>
            </div>
            @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                
            <div class="col-md-12 mt-5">
                <div class="modal  fade" id="btnUsuario" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Agregar Talla</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('GuardarTalla')}}" method="POST" class="form-group">
                            @csrf
                           <div class="row">
                             <div class="col-12"> 
                                <label>Talla</label>
                                <input type="text" name="talla" class="form-control" placeholder="S - L - M - XL......"/>
                              </div>  
                              
                           </div>  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>

            <table class="table table-bordered data-table" id="usuarios">

                <thead>

                    <tr>

                        <th width="50">Id</th>

                        <th width="100px">Talla</th>

                        <th width="200px">Estado</th>
                        
                        <th width="220px">Fecha de creacion</th> 
                        <th width="220px">Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($tallas as $item)
                        
                    <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td class="text-center">{{$item->talla}}</td>
                        <td class="text-center">{{$item->estado==1?"Activo":"Inactivo"}}</td>
                        <td class="text-center">{{$item->created_at}}</td>
                        <td>
                            <a href="{{url('/Administrador/tallas/ModificarTalla/'.$item->id)}}" class="btn btn-primary">Editar</a>
                            <a href="{{url('/Administrador/tallas/Estado/'.$item->id)}}" class="btn btn-dark">Cambiar Estado</a>
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