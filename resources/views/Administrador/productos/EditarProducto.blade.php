@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')


@section('content')
<div class="container">

  <div class="row">

      <div class="col-md-12 mt-5">

          <div class="row">

              <div class="col-md-12 text-center">

                  <h3><strong>Editar Producto</strong></h3>

              </div>

          </div>
      </div>
       
      <div class="col-lg-12">
          <form action="{{url('/Administrador/productos/ModificarProductos')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{$productoB->id}}" name="idProducto"/>
              <div class="row">
                  <div class="col-12"> 
                     <label>Nombre</label>
                     <input type="text" name="nombre" class="form-control" id="nombre" value="{{$productoB->nombre}}"/>
                   </div>  
                   <div class="col-6 mt-2">
                     <label>Stock</label>
                     <input type="number" name="stock" class="form-control" value="{{$productoB->stock}}"/>
                   </div>
                   <div class="col-6 mt-2">
                      <label>Precio</label>
                      <input type="number" name="precio" class="form-control" value="{{$productoB->precio}}" />
                   </div>
                   <div class="col-12 mt-2">
                       <label>Descuento</label>
                       <input type="text" name="descuento" class="form-control" value="{{$productoB->descuento}}"/>
                   </div>
                   <div class="col-12"> 
                     <label>Descripcion</label>
                     <textarea type="text" name="descripcion" class="form-control" id="desc" value="{{$productoB->descripcion}}"></textarea>
                   </div> 
                   <div class="col-4 mt-2" id="divColor">
                       <label>Color</label>
                       <select class="custom-select" id="colores" onchange="selectValores(0)" name="color">
                         <option>Escoger Color</option>
                         @foreach ($colores as $item)
                         @if ($item->id==$productoB->id_color)
                         <option selected value="{{$item->id}}">{{$item->color}}</option> 
                         @endif    
                         @if($item->id != $productoB->id_color)
                         <option value="{{$item->id}}">{{$item->color}}</option> 
                         @endif
                         @endforeach
                        
                         
                       </select>
                       <!--<input type="hidden" name="color" id="color"/>-->
                   </div>
                   <div class="col-4 mt-2" id="divCategori">
                      <label>Categorias</label>
                      <select class="custom-select" id="selectCategori" onchange="selectValores(1)" name="categoria">
                         <option selected>Escoger Categoria</option>
                         @foreach ($categorias as $cate)
                            @if ($cate->id == $productoB->id_categoria )
                             <option selected value="{{$cate->id}}">{{$cate->Nombre_Categoria}}</option>                       
                            @endif
                            @if($cate->id != $productoB->id_categoria)
                              <option value="{{$cate->id}}">{{$cate->Nombre_Categoria}}</option>   
                            @endif     
                         @endforeach                                    
                       </select>
                       <!--<input type="hidden" name="categoria" id="categoria"/>-->
                   </div>
                   <div class="col-4 mt-2" id="divTallas">   
                      <label>Tallas</label>
                        <select id="multi" class="selectpicker" name="tallas[]" onchange="TallasOrganizacion()" multiple>
                          @foreach($tallas as $t) 
                               @foreach($tallasE as $tallae) 
                                  @if($tallae->id_producto == $productoB->id)
                                       @if($t->id == $tallae->id_talla) 
                                         <option selected value="{{$t->id}}">{{$t->talla}}</option>
                                       @endif          
                                                                                                                         
                                  @endif     
                                    
                               @endforeach  
                           <option value="{{$t->id}}">{{$t->talla}}</option>
                          @endforeach  
                        </select>
                  </div>
                   <div class="col-6 mt-2">
                      <label>Imagen 1</label>
                      <input  type="file" class="form-control-file"  name="imagenes[]" id="imagen1"/>
                   </div>
                   <div class="col-6 mt-2">
                    <label>Imagen 2</label>
                    <input type="file" class="form-control-file"  name="imagenes[]" id="imagen2"/>
                 </div>
                 <div class="col-6 mt-2">
                  <label>Imagen 3</label>
                  <input class="form-control-file" type="file" name="imagenes[]" id="imagen3" />
                 </div>
                 <div class="col-6 mt-2">
                   <label>Imagen 4</label>
                   <input class="form-control-file" type="file"  name="imagenes[]" id="imagen4"/>
                 </div>
                 </div>
                 <div class="row" id="inputTallaC">
                  
                 </div>
         
             </div>
               <button type="submit" class="btn btn-success mt-3 mr-2 mb-3">Enviar</button>
               <a href="{{url('/Administrador/productos/MostrarProductos')}}" class="btn btn-primary mt-3 mb-3">Cancelar</a>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@stop

@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

@stop