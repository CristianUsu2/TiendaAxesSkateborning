@extends('Layout.plantillaU')
@section('paginas')

<div class="container pt-5 pb-5">
            <div class="row">
               
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <div class="login-reg-form-wrap  pr-lg-50">

                        <h2>EDITAR PERFIL</h2>
                        <form action="{{route('Modificar')}}" method="POST">
                            @csrf
                            @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                            <input type="hidden" value="{{$usuario->Id_Usuarios}}" name="IdUsuario"/>

                            <div class="single-input-item">
                                <input type="text" name="identificacion" value="{{$usuario->identificacion}}" placeholder="Documento Identidad" />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="nombre"  value="{{$usuario->name}}" placeholder="Nombre" />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="apellido"  value="{{$usuario->apellido}}" placeholder="Apellido" />
                            </div>

                            <div class="single-input-item">
                                <input type="email" name="email"  value="{{$usuario->email}}" placeholder="Correo"  />
                            </div>

                            <div class="single-input-item">
                                <input type="text" name="telefono"  value="{{$usuario->telefono}}" placeholder="Telefono / Celular" />
                            </div>
                           
     
                            <div class="single-input-item">
                                <div class="login-reg-form-meta">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                            <label class="custom-control-label" for="subnewsletter">Acepto Términos y Condiciones</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="sqr-btn" type="submit">EDITAR DATOS</button>
                            </div>
                        </form>
                        </div>

                </div>
                <!-- Register Content End -->
            </div>
        </div>


@endsection