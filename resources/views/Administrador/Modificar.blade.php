@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')


@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Editar Usuario</strong></h3>
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                </div>

            </div>
         
            

        </div>
        
         <div class="col-lg-12">
            <form action="{{route('ModificarUsuario')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$usuario->Id_Usuarios}}" name="IdUsuario"/>
                <div class="row form-row">
                    <div class="form-group col-12">
                        <label>Identificacion</label>
                        <input class="form-control" type="email" name="CorreoN" value="{{$usuario->identificacion}}" disabled />
                       </div>
      
                 <div class="form-group col-6">
                  <label>Nombre</label>
                  <input class="form-control" type="text" name="NombreN" value="{{$usuario->name}}"/>
                 </div>

                 <div class="form-group col-6">
                  <label>Apellido</label>
                  <input class="form-control" type="text" name="ApellidoN" value="{{$usuario->apellido}}" />
                 </div>

                 <div class="form-group col-6">
                  <label>Correo</label>
                  <input class="form-control" type="email" name="CorreoN" value="{{$usuario->email}}" />
                 </div>

                 <div class="form-group col-6">
                  <label>Telefono/Celular</label>
                  <input class="form-control" type="text" name="TelefonoN" value="{{$usuario->telefono}}" />
                 </div>
                </div>
                 <button type="submit" class="btn btn-success">Enviar</button>
                 <a href="{{route('usuarios')}}" class="btn btn-primary">Cancelar</a>
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