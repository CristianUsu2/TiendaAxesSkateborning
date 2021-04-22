@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">

    <div class="row mt-2">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Usuarios Registrados</strong></h3>
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                </div>
               <button class="btn btn-success mb-2 ml-2" data-toggle="modal" data-target="#btnUsuario"><i style="margin-right:5px;" class="fas fa-plus"></i>Crear Usuario</button>
                <a href="{{route('PDF')}}"><button class="btn btn-danger mb-2 ml-2"><i style="margin-right:5px;" class="fas fa-file-import"></i>Generar PDF</button></a>

            </div>

            <div class="col-md-12 mt-5">
                <div class="modal  fade" id="btnUsuario" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('agregarU')}}" method="POST" class="form-group">
                            @csrf
                           <div class="row">
                             <div class="col-12"> 
                                <label>Documento de identidad</label>
                                <input type="text" name="identificacion" class="form-control" placeholder="12312 ...."/>
                              </div>  
                              <div class="col-6 mt-2">
                                <label>Nombre</label>
                                <input type="text" name="nombreNu" class="form-control" placeholder="alveiro"/>
                              </div>
                              <div class="col-6 mt-2">
                                 <label>Apellido</label>
                                 <input type="text" name="apellidoNu" class="form-control" placeholder="zuñiga"/>
                              </div>
                              <div class="col-12 mt-2">
                                  <label>Email</label>
                                  <input type="email" name="emailNu" class="form-control" placeholder="212@gmail.com"/>
                              </div>
                              <div class="col-12 mt-2">
                                  <label>Telefono</label>
                                  <input type="text" name="telefonoNu" class="form-control" placeholder=""/> 
                              </div>
                              <div class="col-6 mt-2">
                                  <label>Contraseña</label>
                                  <input type="password" name="passwordNu" class="form-control" placeholder=""/>
                              </div>
                              <div class="col-6 mt-2">
                                  <label>Confirmar contraseña</label>
                                  <input type="password" name="passwordNuR" class="form-control" placeholder=""/>
                              </div>
                           </div>  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
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

                        <th width="10">Id</th>

                        <th>Documento</th>

                        <th>Nombre</th>

                        <th>Apellido</th>

                        <th width="50px">Correo</th>

                        <th>Telefono</th>

                        <th>Estado</th>
                        
                        <th width="220px">Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($users as $user)
                        
                    <tr>
                        <td>{{$user->Id_Usuarios}}</td>
                        <td>{{$user->identificacion}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telefono}}</td>
                        <td>{{$user->estado==1?"Activo":"Inactivo"}}</td>
                      
                        <td>
                            <a href="{{url('/Administrador/usuariosE/'.$user->Id_Usuarios)}}" class="btn btn-primary">Editar</a>
                            <a href="{{url('/Administrador/usuarios/'.$user->Id_Usuarios)}}" class="btn btn-dark">Cambio Estado</a>
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