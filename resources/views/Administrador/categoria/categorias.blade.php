@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content_header')
    <h1>Panel Administrativo</h1>
@stop

@section('content')
<div class="container">


    <div class="col-md-12 mt-5">
        <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="{{route('agregarC')}}" method="POST" class="form-group">
                    @csrf
                  <label>Nombre de la Categoria</label>
                  <input type="text" name="Nombre" class="form-control" placeholder="Camisa, Zapatos, Bolso......"/>
                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
              </div>
            </div>
          </div>

        
    
    

    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="row">

                <a><button class="btn btn-primary" data-toggle="modal" data-target="#agregar">Agregar Categoria</button></a>


                <div class="col-md-12 text-center">

                    <h3><strong>Categorías</strong></h3>
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                </div>

            </div>

            <table class="table table-bordered data-table" id="usuarios">

                <thead>

                    <tr>

                        <th width="50">Id</th>

                        <th>Nombre Categoría</th>

                        <th>Estado</th>

                        <th colspan="1">Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    
                    @foreach($categoria as $categorias)
                        
                    <tr>
                        <td>{{$categorias->id}}</td>
                        <td>{{$categorias->Nombre_Categoria}}</td>
                        <td>{{$categorias->estado==1? "Activo":"Inactivo"}}</td>
                        <td>
                            <a class="btn btn-danger"  href="{{url('/Administrador/categorias/editar/'.$categorias->id)}}">Editar</a>
                            <a class="btn btn-success"  href="{{url('/Administrador/categorias/'.$categorias->id)}}">Cambiar Estado</a>
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