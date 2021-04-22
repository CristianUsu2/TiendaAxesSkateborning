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


<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-wrapper-area">
                    <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                        <div class="single-slider" style="background-image: url(../Usuario/img/slider11_bg.jpg);">
                            <div class="container p-0">
                                <div class="slider-main-content">
                                    <div class="slider-content-img">
                                        <img src="../Usuario/img/slider11_lable1.png" alt="">
                                        <img src="../Usuario/img/slider11_lable2.png" alt="">
                                        <img src="../Usuario/img/slider11_lable3.png" alt="">
                                    </div>
                                    <div class="slider-text">
                                        <div class="slider-label">
                                            <img src="../Usuario/img/slider11_lable4.png" alt="">
                                        </div>
                                        <h1>headphones az12</h1>
                                        <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider" style="background-image: url(../Usuario/img/slider12_bg.jpg);">
                            <div class="container p-0">
                                <div class="slider-main-content">
                                    <div class="slider-content-img">
                                        <img src="../Usuario/img/slider11_lable1.png" alt="">
                                        <img src="../Usuario/img/slider11_lable2.png" alt="">
                                        <img src="../Usuario/img/slider11_lable3.png" alt="">
                                    </div>
                                    <div class="slider-text">
                                        <div class="slider-label">
                                            <img src="../Usuario/img/slider11_lable4.png" alt="">
                                        </div>
                                        <h1>samson s90</h1>
                                        <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="banner-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                    <div class="img-container img-full fix imgs-res mb-sm-30">
                        <a href="#">
                            <img src="../Usuario/img/banner_left.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 order-sm-3">
                    <div class="img-container img-full fix mb-30">
                        <a href="#">
                            <img src="../Usuario/img/banner_static_top1.jpg" alt="">
                        </a>
                    </div>
                    <div class="img-container img-full fix mb-30">
                        <a href="#">
                            <img src="../Usuario/img/banner_static_top2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                    <div class="img-container img-full fix">
                        <a href="#">
                            <img src="../Usuario/img/banner_static_top3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  


<div class="page-wrapper pt-6 pb-28 pb-md-6 pb-sm-6 pt-xs-36">
    <div class="container">
        <div class="row">
            <!-- start home sidebar -->
            <div class="col-lg-3">
                <div class="home-sidebar">
                    <!-- hot deals area start -->
                    <div class="main-sidebar hot-deals-wrap mb-30">
                        <div class="section-title-2 d-flex justify-content-between mb-28">
                            <h3>hot deals</h3>
                            <div class="slick-append"></div>
                        </div> <!-- section title end -->
                        <div class="deals-carousel-active slick-padding slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="../Usuario/img/product-img7.jpg" class="img-pri" alt="">
                                        <img src="../Usuario/img/product-img13.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
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
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="../Usuario/img/product-img3.jpg" class="img-pri" alt="">
                                        <img src="../Usuario/img/product-img4.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
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
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                            <!-- product single item start -->
                            <div class="product-item fix">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="../Usuario/img/product-img5.jpg" class="img-pri" alt="">
                                        <img src="../Usuario/img/product-img1.jpg" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                    class="fa fa-search"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="fa fa-refresh"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">vertual product 01</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">$70.00</span>
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
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                    <!-- hot deals area end -->

                    <!-- best seller area start -->
                    <div class="main-sidebar category-wrapper mb-24">
                        <div class="section-title-2 d-flex justify-content-between mb-28">
                            <h3>best seller</h3>
                            <div class="category-append"></div>
                        </div> <!-- section title end -->
                        <div class="category-carousel-active row" data-row="4">
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img//product-img2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img10.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">simple Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $150.00
                                            </div>
                                            <div class="old-price">
                                                <del>$180.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                            <div class="col">
                                <div class="category-item">
                                    <div class="category-thumb">
                                        <a href="product-details.html">
                                            <img src="../Usuario/img/product-img12.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h4><a href="product-details.html">external Product 01</a></h4>
                                        <div class="price-box">
                                            <div class="regular-price">
                                                $140.00
                                            </div>
                                            <div class="old-price">
                                                <del>$160.00</del>
                                            </div>
                                        </div>
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
                                    </div>
                                </div> <!-- end single item -->
                            </div> <!-- end single item column -->
                        </div>
                    </div>
                    <!-- best seller area end -->

                   

                   

                </div>
            </div>
            <!-- end home sidebar -->

            <div class="col-lg-9" id="divPadreProductos">
                <!-- featured category area start -->
                <div class="feature-category-area mt-md-70">
                    <div class="section-title mb-30">
                        <div class="title-icon">
                            <i class="fa fa-bookmark"></i>
                        </div>
                        <h3>Hot</h3>
                    </div> <!-- section title end -->
                    <!-- featured category start -->
                    <div class="featured-carousel-active slick-padding slick-arrow-style">
                        <!-- product single item start -->
                        @foreach ($productos as $producto)
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="{{url('/Productos/detalleProducto'.$producto->id)}}"  id="imagenes">
                                    @foreach ($imagenes as $imagen)
                                    @if($imagen->id == $producto->id)
                                    <img src="{{asset('storage').'/'.$imagen->foto}}" class="img-sec"  alt="">
                                    @endif
                                    @endforeach
                                   
                                   
                                </a>
                                <div class="product-label">
                                    <span>aiay aiay</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fas fa-shopping-cart"></i></span> </a>
                                    <a href="{{url('/Productos/detalleProducto'.$producto->id)}}" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fas fa-eye"></i></a>
                                    
                                    
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$producto->nombre}}</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">{{$producto->precio}}</span>
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
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- product single item end -->
                        <!-- product single item start -->
                      
                        <!-- product single item end -->
                    </div>
                    <!-- featured category end -->
                </div>
                <!-- featured category area end -->

                <!-- banner statistic start -->
                <div class="banner-statistic pt-28 pb-36">
                    <div class="img-container fix img-full">
                        <a href="#">
                            <img src="../Usuario/img/banner_static1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- banner statistic end -->

                <!-- featured category area start -->
                <div class="feature-category-area">
                    <div class="section-title mb-30">
                        <div class="title-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h3>New Arrivals</h3>
                    </div> <!-- section title end -->
                    <!-- featured category start -->
                    <div class="featured-carousel-active slick-padding slick-arrow-style">
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img1.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img2.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">vertual product 01</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$70.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img3.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img4.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">simple product 02</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$100.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img5.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img6.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">affiliate product</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$60.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img7.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img8.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">trendy product 03</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$50.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img9.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img10.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">simple product 20</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$80.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                        <!-- product single item start -->
                        <div class="product-item fix">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="../Usuario/img/product-img11.jpg" class="img-pri" alt="">
                                    <img src="../Usuario/img/product-img12.jpg" class="img-sec" alt="">
                                </a>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                class="fa fa-search"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="fa fa-refresh"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">grouped product</a></h4>
                                <div class="pricebox">
                                    <span class="regular-price">$70.00</span>
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
                                </div>
                            </div>
                        </div>
                        <!-- product single item end -->
                    </div>
                    <!-- featured category end -->
                </div>
                <!-- featured category area end -->

                <!-- banner statistic start -->
                <div class="banner-statistic pt-28 pb-30 pb-sm-0">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="img-container fix img-full mb-sm-30">
                                <a href="#">
                                    <img src="../Usuario/img/banner_static2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="img-container fix img-full mb-sm-30">
                                <a href="#">
                                    <img src="../Usuario/img/banner_static3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner statistic end -->

                <!-- category features area start -->
                <div class="category-feature-area">
                    <div class="row">
                        <!-- New Products area start -->
                        <div class="col-lg-4">
                            <div class="category-wrapper mb-md-24 mb-sm-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>New Products</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del></del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">grouped Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $100.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del></del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">simple Product 05</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $155.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$160.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">demandable Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $210.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$240.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">simple Product 12</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">grouped Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $90.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$115.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                        </div>
                        <!-- New Products area end -->
                        <!-- Most viewed area start -->
                        <div class="col-lg-4">
                            <div class="category-wrapper mb-md-24 mb-sm-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>Most viewed</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img14.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">simple Product 06</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $190.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$210.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">affiliate Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $45.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$650.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">grouped Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $120.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$170.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $180.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del></del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">external Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">download Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                        </div>
                        <!-- Most viewed area end -->
                        <!-- Most viewed area start -->
                        <div class="col-lg-4">
                            <div class="category-wrapper mb-md-24 mb-sm-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>hot sale</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $120.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$150.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img15.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">grouped Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $160.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del></del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">download Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $140.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$160.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img16.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">simple Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $80.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$100.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img15.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">affiliate Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $120.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del></del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">external Product</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $130.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$140.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="../Usuario/img/product-img3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">variable Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $70.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$90.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                        </div>
                        <!-- Most viewed area end -->
                    </div>
                </div>
                <!-- category features area end -->
            </div>
        </div>
    </div>
</div>

         
@endsection

