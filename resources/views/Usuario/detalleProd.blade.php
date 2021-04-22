@extends('Layout.plantillaU')
@section('paginas')

<div class="product-details-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-large-slider mb-20 slick-arrow-style_2">
                                        @foreach($ImagenesProducto as $imagen)
                                       
                                        <div class="pro-large-img img-zoom">
                                            <img id="img" src="{{asset('storage').'/'.$imagen->foto}}" alt="" />
                                        </div>
                                
                                        @endforeach
                                    </div>
                                    <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                        @foreach($ImagenesProducto as $imagen)
                                        <div class="pro-nav-thumb"><img src="{{asset('storage').'/'.$imagen->foto}}"  alt="" /></div>
                                        @endforeach 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-des mt-md-34 mt-sm-34">
                                        <input id="idProducto" type="hidden" value="{{$ProductoSelecc->id}}" />
                                        <h3 id="titulo">{{$ProductoSelecc->nombre}}</h3>
                                        <div class="availability mt-10">
                                            <h5>Stock:</h5>
                                            <span>{{$ProductoSelecc->stock}}</span>
                                        </div>
                                        <div class="pricebox">
                                            <span class="regular-price" id="precio">${{$ProductoSelecc->precio}}</span>
                                        </div>
                                        <p>{{$ProductoSelecc->descripcion}}</p>
                                        <div class="quantity mt-2 mb-3">
                                            <div class="btn-group" role="group" id="seccionTallas">
                                                @foreach($tallasProducto as $talla)
                                                  @foreach ($tallas as $t)
                                                    @if($talla->id_talla == $t->id)
                                                     <button type="button" class="btn btn-dark mr-3">{{$t->talla}}</button>
                                                    @endif
                                                  @endforeach
                                                 
                                                @endforeach
                                              </div>
                                        </div>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1" id="cantidad"></div>
                                            </div>
                                            <div class="action_link" >
                                                <a class="buy-btn w-100 mr-3" href="#" id="botonCarrito">Añadir a la bolsa<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="useful-links mt-20">
                                            <div>
                                                
                                            </div>
                                        </div>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews mt-34">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">Descripcion</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">Informacion</a>
                                            </li>
                                         
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
                                                    <div class="review-description">
                                                        <div class="tab-thumb">
                                                            <img src="assets/img/about/services.jpg" alt="">
                                                        </div>
                                                        <div class="tab-des mt-sm-24">
                                                            <h3>Product Information :</h3>
                                                            <ul>
                                                                <li>Donec non est at libero vulputate rutrum.</li>
                                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                                <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                                <li>Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla</li>
                                                                <li>Donec a neque libero.</li>
                                                                <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td id="color">
                                                                @foreach ($colores as $c)
                                                                @if($c->id == $ProductoSelecc->id_color)
                                                                {{$c->color}}
                                                                @endif
                                                                @endforeach
                                                              
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tallas</td>
                                                            <td>@foreach ($tallas as $item)
                                                                 @foreach ($tallasProducto as $t)
                                                                    @if($t->id_talla == $item->id) 
                                                                    {{$item->talla}}
                                                                    @endif
                                                                 @endforeach 
                                                            @endforeach</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Categoria</td>
                                                            <td id="categoria">@foreach ($categoria as $categoria)
                                                                    @if($categoria->id == $ProductoSelecc->id_categoria) 
                                                                    {{$categoria->Nombre_Categoria}}
                                                                    @endif
                                                            @endforeach</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- product details reviews end --> 

                        <!-- related products area start -->
                      
                        <!-- related products area end -->
                    </div>

                  
                    <!-- sidebar end -->
                </div>
            </div>
        </div>

@endsection