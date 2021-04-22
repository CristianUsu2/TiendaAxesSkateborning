@extends('adminlte::page')
@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">

    <div class="row mt-2">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Productos Registrados</strong></h3>

                </div>
               <button class="btn btn-success mb-2 ml-2" data-toggle="modal" data-target="#btnProductos"><i style="margin-right:5px;" class="fas fa-plus"></i>Crear Producto</button>
                <a href="{{route('PDF')}}"><button class="btn btn-danger mb-2 ml-2"><i style="margin-right:5px;" class="fas fa-file-import"></i>Generar PDF</button></a>

            </div>

            <div class="col-md-12 mt-5">
                <div class="modal  fade " id="btnProductos" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{url('/Administrador/productos/MostrarProductos')}}" method="post" id="formProducto" class="form-group"enctype="multipart/form-data">
                            @csrf
                           <div class="row">
                             <div class="col-12"> 
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" />
                              </div>  
                              <div class="col-6 mt-2">
                                <label>Stock</label>
                                <input type="number" name="stock" class="form-control" />
                              </div>
                              <div class="col-6 mt-2">
                                 <label>Precio</label>
                                 <input type="number" name="precio" class="form-control" />
                              </div>
                              <div class="col-12 mt-2">
                                  <label>Descuento</label>
                                  <input type="text" name="descuento" class="form-control" />
                              </div>
                              <div class="col-12"> 
                                <label>Descripcion</label>
                                <textarea type="text" name="descripcion" class="form-control" id="desc"></textarea>
                              </div> 
                              <div class="col-4 mt-2" id="divColor">
                                  <label>Color</label>
                                  <select class="custom-select" id="colores" onchange="selectValores(0)" name="color">
                                    <option selected>Escoger Color</option>
                                    @foreach ($colores as $item)
                                    <option value="{{$item->id}}">{{$item->color}}</option>     
                                    @endforeach
                                   
                                    
                                  </select>
                                  <!--<input type="hidden" name="color" id="color"/>-->
                              </div>
                              <div class="col-4 mt-2" id="divCategori">
                                 <label>Categorias</label>
                                 <select class="custom-select" id="selectCategori" onchange="selectValores(1)" name="categoria">
                                    <option selected>Escoger Categoria</option>
                                    @foreach ($categorias as $cate)
                                    <option value="{{$cate->id}}">{{$cate->Nombre_Categoria}}</option>     
                                    @endforeach                                    
                                  </select>
                                  <!--<input type="hidden" name="categoria" id="categoria"/>-->
                              </div>
                              <div class="col-4 mt-2" id="divTallas">   
                                  <label>Tallas</label>
                                    <select id="multi" class="selectpicker" name="tallas[]" onchange="TallasOrganizacion()" multiple>
                                          @foreach ($tallas as $talla)
                                          <option value="{{$talla->id}}">{{$talla->talla}}</option>
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
                     
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit"  id="guardar" class="btn btn-primary">Guardar</button>
                      </div>
                      </div>
                         </form>
                    </div>
                  </div>
                </div> 
            </div>
  
            <table class="table table-bordered data-table" id="usuarios">

              <thead>

                  <tr>

                      <th width="10">Id</th>

                      <th>Nombre</th>

                      <th>Imagen</th>

                      <th>Descripcion</th>

                      <th>Precio</th>
                    
                      <th>Descuento</th>

                      <th>Categoria</th>

                      <th>Color</th>
                      
                      <th>Stock</th>

                      <th>Tallas</th>

                      <th>Cantidad</th>

                      <th>Estado</th>
                      
                      <th width="220px">Acciones</th>

                  </tr>

              </thead>

              <tbody id="contenedorImagenes">
                  @foreach ($productos as $p)
                      
                  <tr>
                      <td>{{$p->id}}</td>
                      <td>{{$p->nombre}}</td>
                      <td>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
                            <div class="carousel-inner">
                               @foreach ($imagenes as $imagen)
                                @if($imagen->id == $p->id)
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('storage').'/'.$imagen->foto}}" alt="First slide">
                                </div>
                                 
                                @endif
                              @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                      </td>
                      <td>{{$p->descripcion}}</td>
                      <td>{{$p->precio}}</td>
                      <td>{{$p->descuento}}</td>
                      <td>@foreach($categorias as $categoria)@if($p->id_categoria==$categoria->id){{$categoria->Nombre_Categoria}}@endif @endforeach</td>
                      <td>@foreach($colores as $c)@if($p->id_color==$c->id){{$c->color}}@endif @endforeach</td>
                      <td>{{$p->stock}}</td>
                      <td>@foreach($tallasP as $tallaP)
                        @if($p->id==$tallaP->id_producto)
                        @foreach ($tallas as $t)
                            @if($t->id == $tallaP->id_talla)
                              {{$t->talla}}
                            @endif
                        @endforeach
                         @endif
                        @endforeach 
                      </td>
                      <td>
                        @foreach($tallasP as $tallaP)
                            @if($p->id==$tallaP->id_producto)
                             @foreach ($tallas as $t)
                                @if($t->id == $tallaP->id_talla)
                                 {{$tallaP->cantidad}}
                                @endif
                             @endforeach
                            @endif
                         @endforeach 
                      </td>
                      <td>{{$p->estado==1?"Activo":"Inactivo"}}</td>
                    
                      <td>
                        <a href="{{url('/Administrador/productos/EditarProductos/'.$p->id)}}" class="btn btn-primary mb-2">Editar</a>
                        <a href="{{url('/Administrador/productos/MostrarProductos/'.$p->id)}}" class="btn btn-dark">Cambiar estado</a>
                      </td>

                  </tr>
                  @endforeach

              </tbody>

          </table>

          
          

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
<script>
    $(document).ready(function () {
        $('#productos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

            }

        });
    });

    var Array2=[];
    var TallasOrganizacion=()=>{
    let multiSelect=$('#multi');
    let divTallas=$('#divTallas');
     var tallas=[];
       multiSelect.children(':selected').each((a,v)=>{
           let talla={
               'idTalla':v.value
               //'talla': v
           }
           tallas.push(talla);
       });
       Array2=tallas;
       AgregarInput(tallas.length);
    };

    let AgregarInput=(e)=>{   
        let i=0;
        let divCantidadesTalla=document.getElementById("inputTallaC");
        divCantidadesTalla.innerHTML='';
         while(i<e){
        divCantidadesTalla.innerHTML+=`
           <div class='col-4 mt-3'>
            <label>Cantidad de talla ${i}</label>
            <input type="number" name="cantidadTalla[]" class="form-control" id="tallaC${i}"/>
            </div>`;
        i++;
         }
    };

    let selectValores=(e)=>{
        if(e==1){
         $("#categoria").val($('#selectCategori option:selected').val())
        }else{
        $("#color").val($('#colores option:selected').val())
        }
    
    } 

</script>
<script>
  const divsImagenes=document.querySelector("#contenedorImagenes");
  const nodos=divsImagenes.querySelectorAll(".carousel-inner");
  nodos.forEach(e=>e.firstElementChild.classList.add("active"));
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
@stop