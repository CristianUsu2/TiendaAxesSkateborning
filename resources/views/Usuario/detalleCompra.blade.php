@extends('Layout.plantillaU')
@section('paginas')

<div class="main-header-wrapper bdr-bottom1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-inner">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle">
                                    Categorias
                                    <div class="cat-icon">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <nav class="category-menu hm-1">
                                    <ul>
                                        <li><a href="{{route('categorias')}}"><i class="fas fa-shoe-prints"></i>
                                            Zapatos</a></li>
                                                                              
                                        <li><a href="{{route('categorias')}}"><i class="fas fa-suitcase-rolling"></i>
                                               Bolsos</a></li>
                                        <li><a href="{{route('categorias')}}"><i class="fas fa-graduation-cap"></i>
                                                Gorras</a></li>
                                        <li><a href="{{route('categorias')}}"><i class="fa fa-tshirt"></i>
                                                Camisas</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="/"><i class="fa fa-home"></i>Inicio</a>
                                            
                                        </li>
                                       
                                        <li><a href="#">Productos <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-left-sidebar-3-col.html">left
                                                                sidebar 3 col</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar-3-col.html">grid right
                                                                sidebar 3 col</a></li>
                                                        <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                column</a></li>
                                                        <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">shop list left
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-full.html">shop list full width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product
                                                                details
                                                                affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details
                                                                variable</a></li>
                                                        <li><a href="product-details-group.html">product details
                                                                group</a></li>
                                                        <li><a href="product-details-box.html">product details box
                                                                slider</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>            

        <br>
        <div class="modal fade" id="formUsuarioGoogle" tabindex="-1" role="dialog" aria-labelledby="formUsuarioGoogle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Datos Necesarios Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="formGoogleU" action="{{url('/Productos/FinalizarCompraGoogle')}}">
                    <div class="single-input-item">
                        <input type="text" placeholder="N° de identificacion" id="identificacion"/>
                    </div>
                    <div class="single-input-item">
                        <input type="text" placeholder="telefono" id="telefono"/>
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" id="btnDatosGoogleU" class="btn btn-primary">Enviar</button>
                </div>
            </form>
              </div>
            </div>
          </div>

<div class="cart-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Imagen</th>
                                    <th class="pro-title">Producto</th>
                                    <th class="pro-price">Precio</th>
                                    <th class="pro-quantity">Cantidad</th>
                                    <th class="pro-remove">Eliminar</th>
                                </tr>
                                </thead>
                                <tbody id="tbodyC">
                                   
                                </tbody>
                            </table>
                        </div>
        
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Pedido Total</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td id="subtotalD"></td>
                                        </tr>
                                        <tr>
                                            <td>Envio</td>
                                            <td>$10.000</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount" id="totalD"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{url('/Productos/finalizarCompra')}}" id="btnProcederPagar" class="sqr-btn d-block">Proceder a pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection