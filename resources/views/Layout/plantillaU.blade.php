<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Usuario/pushbar/css/pushbar.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/css/helper.min.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/css/style.css">
    <link rel="stylesheet" type="text/css" href="../Usuario/css/skin-default.css">

    <link rel="icon" href="../Usuario/img/logo.jpeg" />
    <title>Tienda Axes</title>
  </head>
  <body>
      <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                        <div class="header-call-action">
                                <a href="mailto:axesskateboarding@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                  Comúnicate axesskateboarding@gmail.com
                                </a>
                                <a href="https://wa.me/573016729248">
                                    <i class="fa fa-phone"></i>
                                   Comúnicate WhatsApp +57 301 6729248
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    @php 
                                                    $datosS=session('datosU')
                                                   
                                                    @endphp
                                                    @if (($datosS!=null))
                                                       @foreach ($datosS as $item)
                                                     
                                                       Bienvenido, {{$item->name}}
                                                       @endforeach 
                                                       
                                                        <i class="fa fa-angle-down"></i>
                                                    @else
                                                     
                                                    <i class="fas fa-user"></i>   Mi Cuenta
                                                    <i class="fa fa-angle-down"></i>
                                                    @endif
                                                   
                                                </a>
                                               @if ($datosS==null)
                                               <div class="dropdown-menu" aria-labelledby="myaccount" id="OpcionesU">
                                                <a class="dropdown-item" href="{{route('login')}}"><i style="margin-right:3px;" class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                                               </div>
                                               @else
                                                @if (session()->has('datosU'))
                                                <div class="dropdown-menu" aria-labelledby="myaccount" >
                                                    <a class="dropdown-item" href="{{url('/Informacion/'.$item->Id_Usuarios)}}"><i style="margin-right:5px;" class="fas fa-user"></i>Mi Perfil</a>
                                                    <a class="dropdown-item" href="{{route('PedidosU')}}"><i style="margin-right:5px;" class="fa fa-truck"></i>Mis Pedidos</a>
                                                    <a class="dropdown-item" href="{{route('loginCerrar')}}"><i style="margin-right:5px;" class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
                                                   </div>    
                                                @endif
                                                 
                                               @endif
                                                
                                            </div>
                                        </li>
                                        <li>
                                        <i class="fas fa-shopping-cart"></i>    <a href="{{route('detalleCompra')}}">Mi Carrito</a>
                                        </li>
                                        <li>
                                        <button id="alerta" type="button" style="border:none; background:none;"><i class="fas fa-bell"></i></button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

            <div class="header-middle-area pt-20 pb-20">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-3">
                          <div class="brand-logo">
                              <a href="/">
                                  <img src="../Usuario/img/logo.jpeg" alt="brand logo">
                              </a>
                          </div>
                      </div> <!-- end logo area -->
                      <div class="col-lg-9">
                          <div class="header-middle-right">
                              <div class="header-middle-shipping mb-20">
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="far fa-clock"></i>
                                      </div>
                                      <div class="shipping-content">
                                      <h5>Horario de Atención</h5>
                                          <span>Lunes - Sábado: 7:00 A.M - 6:00 P.M</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="fa fa-truck"></i>
                                      </div>
                                      <div class="shipping-content">
                                          <h5>Costo del Envío</h5>
                                          <span>El valor del envío es de $10.000 COP</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="far fa-money-bill-alt"></i>
                                      </div>
                                      <div class="shipping-content">
                                          <h5>Descuentos</h5>
                                          <span>Se hacen de forma constante</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                              </div>
                              <div class="header-middle-block">
                                  <div class="header-middle-searchbox">
                                      <input type="text" placeholder="Buscar Producto...">
                                      <button class="search-btn"><i class="fa fa-search"></i></button>
                                  </div>
                                  <div class="header-mini-cart">
                                      <div class="mini-cart-btn">
                                          <i class="fa fa-shopping-cart"></i>
                                          <span class="cart-notification" id="iconoTotal"></span>
                                      </div>
                                      <div class="cart-total-price">
                                          <span>total</span>
                                          <span id="totalC"></span>
                                      </div>
                                      <ul class="cart-list" id="carrito">
                                          
                                          
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

  
        <!-- main menu area end -->

    </header>

    <br>

    <main class="main">

         @yield('paginas')
        </main>


        
  <footer>

    <!-- footer main start -->
    <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>Contactanos</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="location">
                                <li><i class="fa fa-envelope"></i>axesskateboarding@gmail.com</li>
                                <li><i class="fa fa-phone"></i>+57 301 6729248</li>
                                <li><i class="fa fa-map-marker"></i>CC EL DIAMANTE</li>
                            </ul>
                            <a class="map-btn" href="https://www.google.com/maps/place/El+diamante/@6.2612102,-75.5918983,17z/data=!3m1!4b1!4m5!3m4!1s0x8e442911a47ade77:0x43ad415a11e85407!8m2!3d6.2612102!4d-75.5897096?hl=es">Abrir en Google Maps</a>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>Redes Sociales</h4>
                        </div>
                        <div class="widget-body">
                            <ul>
                                <li><a href="https://www.facebook.com/AXES-Skateboarding-100422468179966"><i style="color:blue; margin-right:5px;" class="fab fa-facebook-f"></i>Siguenos en Facebook</a></li>
                                <li><a href="https://www.instagram.com/axes_sb/?hl=es"><i style="color:orange; margin-right:5px;" class="fab fa-instagram"></i>Siguenos en Instagram</a></li>
                                <li><a href="https://www.youtube.com/"><i style="color:red; margin-right:5px;" class="fab fa-youtube"></i>Siguenos en Youtube</a></li>

                            </ul>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
           
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>Métodos de Pago</h4>
                        </div>
                        <div class="widget-body">
                            <ul>
                                <li><i style="color:gray; margin-right:5px;" class="fas fa-credit-card"></i>Tarjeta de crédito</li>
                                <li><i style="color:orange; margin-right:5px;" class="fab fa-cc-mastercard"></i>Mastercard</li>
                                <li><i style="color:blue; margin-right:5px;" class="fab fa-cc-visa"></i>Visa</li>
                                <li><i style="color:green; margin-right:5px;" class="fas fa-motorcycle"></i>Domicilio</li>
                            </ul>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>Mas Información de la Empresa</h4>
                        </div>
                        <div class="widget-body">
                           <p style="text-aling:center; justify-content:center;"> Esta empresa se dedica a la venta de productos 100% colombianos para el deporte Skateboar.</p>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
            </div>
        </div>
    </div>
    <!-- footer main end -->

    <!-- footer bootom start -->
    <div class="footer-bottom-area bg-gray pt-20 pb-20">
        <div class="container">
            <div class="footer-bottom-wrap">
                <div class="copyright-text">
                    <p>©2021 Todos los Derechos Reservados |  <strong>AXES SKATEBOARDING</strong></p>
                </div>
                <div class="payment-method-img">
                   <a style="color:#000;" href="#"><p>Términos y Condiciones | </a> <a style="color:#000;" href="x">Política y Privacidad</a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bootom end -->

</footer>
<!-- footer area end -->

<div class="modal" id="quick_view">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <!-- product details inner end -->
              <div class="product-details-inner">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="product-large-slider slick-arrow-style_2 mb-20">
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img1.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img2.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img3.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img4.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img5.jpg" alt="" />
                              </div>
                          </div>
                          <div class="pro-nav slick-padding2 slick-arrow-style_2">
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img1.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img2.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img3.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img4.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img5.jpg"
                                      alt="" /></div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="product-details-des mt-md-34 mt-sm-34">
                              <h3><a href="product-details.html">external product 12</a></h3>
                              <div class="ratings">
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span><i class="fa fa-star"></i></span>
                                  <div class="pro-review">
                                      <span>1 review(s)</span>
                                  </div>
                              </div>
                              <div class="availability mt-10">
                                  <h5>Availability:</h5>
                                  <span>1 in stock</span>
                              </div>
                              <div class="pricebox">
                                  <span class="regular-price">$160.00</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                  tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                  Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                  dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                  consequat nisi ut mauris efficitur lacinia.</p>
                              <div class="quantity-cart-box d-flex align-items-center mt-20">
                                  <div class="quantity">
                                      <div class="pro-qty"><input type="text" value="1"></div>
                                  </div>
                                  <div class="action_link">
                                      <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- product details inner end -->
          </div>
      </div>
  </div>
</div>
<!-- Quick view modal end -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
  <i class="fa fa-angle-up"></i>
</div>
<script>
  const divsImagenes=document.querySelector("#divPadreProductos");
  if(divsImagenes!=null){
  const nodos=divsImagenes.querySelectorAll("#imagenes");
  nodos.forEach(e=>{e.firstElementChild.classList.remove("img-sec")
                    e.firstElementChild.classList.add("img-pri")  
  });
}
</script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyCMzY42dtyJgXPfzCKZzKp-W2sOvvJcQAM",
    authDomain: "pruebatiendaaxes-4d509.firebaseapp.com",
    projectId: "pruebatiendaaxes-4d509",
    storageBucket: "pruebatiendaaxes-4d509.appspot.com",
    messagingSenderId: "664697906282",
    appId: "1:664697906282:web:4f91c9d720ef40bfb75613",
    measurementId: "G-KTH3MNV6R9"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  const auth = firebase.auth();
</script>
<script src="../Usuario/js/configFirebase.js"></script>
<script src="../Usuario/js/cart.js"><script>
<script src="../Usuario/js/chat.js"></script>
<script src="../Usuario/js/detailsCart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
<script src="../Usuario/js/PayU.js"></script>
<script src="../Usuario/js/jquery-3.3.1.min.js"></script>
<script>
    $("#btnProcederPagar").click((e)=>{
        let usuario=JSON.parse(localStorage.getItem("usuario"));
        if(usuario.validado==false){
           e.preventDefault();
           FormGoogleUsuario(); 
        }
     }); 
     const FormGoogleUsuario=()=>{
         $('#formUsuarioGoogle').modal('show');
         $('#btnDatosGoogleU').click(()=>{
            let usuario=JSON.parse(localStorage.getItem("usuario"));
            let ruta=$("#formGoogleU").attr("action");
            let $datos={
                'Id_Usuarios': usuario.additionalUserInfo.profile.id,
                'name':usuario.additionalUserInfo.profile.given_name,
                'email':usuario.additionalUserInfo.profile.email,
                'identificacion':$("#identificacion").val(),
                'estado':1,
                'id_rol':1,
                'apellido':usuario.additionalUserInfo.profile.family_name,
                'telefono':$("#telefono").val()
            }
           
            $.ajax({
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{url('/Productos/detalleCompra')}}",
                data: $datos,
                dataType: 'json',
            }).done((r)=>{
               if(r==1){
                usuario.validado=true;
                localStorage.setItem("usuario",JSON.stringify(usuario));
                $('#formUsuarioGoogle').modal('hide');
               }
            })
            .catch(r=>{
                console.log(r);
            });
         });
     }
     
</script>
<script src="../Usuario/js/modernizr-3.6.0.min.js"></script>
<script src="../Usuario/js/popper.min.js"></script>
<script src="../Usuario/js/bootstrap.min.js"></script>
<script src="../Usuario/js/plugins.js"></script>
<script src="../Usuario/js/ajax-mail.js"></script>
<script src="../Usuario/js/main.js"></script>

  </body>
</html>