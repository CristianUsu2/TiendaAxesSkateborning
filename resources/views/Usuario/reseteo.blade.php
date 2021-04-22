@extends('Layout.plantillaU')
@section('paginas')

<div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="{{route('cambiarC')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Restablecer Contraseña</h2>
                        @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
                        
                        <div class="single-input-item">
                                <input type="email" name="correo" id="emailBcc" placeholder="Ingrese su Correo"/>
                            </div>

                            <div class="single-input-item">
                                <input type="password" name="pass" id="emailBcc" placeholder="Nueva contraseña"/>
                            </div>

                            <div class="single-input-item">
                                <input type="password" name="passC" id="emailBcc" placeholder="Confirmar contraseña"/>
                            </div>

                            <div class="single-input-item">
                                <button class="sqr-btn" type="submit">Cambiar Contraseña</button>
                            </div>

                </form>
            </div>
        </div>
      </div>

@endsection