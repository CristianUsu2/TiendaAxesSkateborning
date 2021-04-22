<?php

namespace App\Http\Controllers;
use App\Models\Colores;
use App\Models\Categorias;
use App\Models\User;
use App\Models\Tallas;
use App\Models\Productos;
use App\Models\FotoProducto;
use App\Models\ProductosTallas;
use App\Models\Pedidos;
use App\Models\EstadoPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ControladorAdmin extends Controller
{
  /*------------Acciones Usuarios ------------------- */
    public function index(){
        return view('Administrador/Index');
    }
    public function usuarios(){
         $users = User::all();
        return view('Administrador/usuarios',compact('users'));

    }

    public function datosA($id){
      $UserA=User::find($id);
       return view('Administrador/editarA')->with('administrador',$UserA);;
     }

    public function perfil(Request $request){
      $usuA=User::find($request->IdUsuario);
      if($usuA !=null){
          try{
            
            $usuA->identificacion=$request->identificacion;
            $usuA->name=$request->nombre;
            $usuA->email=$request->email;
            $usuA->apellido=$request->apellido;
            $usuA->telefono=$request->telefono;
            $usuA->save();
          
            return back()->with("success", "Sus datos han sido modificados correctamente.");


          }catch(Exception $e){
            return back()->with("failed", "Ocurrio un error, no se pudieron modificar sus datos, vuelva a intentarlo.");

          }
      }
    }
    public function estado($Id_Usuarios){
       $UsuB=User::Where("Id_Usuarios","=",$Id_Usuarios)->first();
       try{
      
          if($UsuB->estado==1){
             $UsuB->estado=0;       
          }else{
            $UsuB->estado=1;
          }        
          $UsuB->save();
         
        return redirect()->action([ControladorAdmin::class, "usuarios"]);
       }catch(Exception $e){
        
         return response()->json($e.getMessage());
       }
    }

    public function editarUsuario($id){
      $UserB=User::find($id);
      return view('Administrador/Modificar')->with('usuario',$UserB);
    }

    public function ModificarUsuario(Request $request){
      $usuM=User::find($request->IdUsuario);
      if($usuM !=null){
          try{
         
            $usuM->name=$request->NombreN;
            $usuM->email=$request->CorreoN;
            $usuM->Apellido=$request->ApellidoN;
            $usuM->telefono=$request->TelefonoN;
            $usuM->save();
          
            return back()->with("success", "Se han modificado los datos exitosamente.");

          }catch(Exception $e){
           
            return back()->with("failed", "Ocurrio un error, no se han modificado los datos, verifique que si haya realizado modificaciones.");

          }
      }
    } 

    public function crear(Request $request){
      $request->validate([
        'nombreNu' => 'required|min:2|max:20',
        'apellidoNu'=> 'required|min:2|max:20',
        'emailNu' => 'required|email|min:4|max:50|',
        'identificacion' => 'required|min:7|max:12|',
         'passwordNu' => 'required|min:2|max:30',
         'passwordNuR'=> 'required|min:2|max:30',
         'telefonoNu' => 'required|min:2|max:11'
     ]);
      try{
      if($request->passwordNu== $request->passwordNuR){
      
       $registro = new User();
       $registro->name = $request->nombreNu;
       $registro->email = $request->emailNu;
       $registro->identificacion = $request->identificacion;
       $incriptado= bcrypt($request->passwordNu);
       $registro->password=$incriptado; 
       $registro->apellido = $request->apellidoNu;
       $registro->telefono = $request->telefonoNu;
       $registro->save();
       return back()->with("success", "Se ha registrado el usuario exitosamente.");

      }
      }catch(Exception $e){
        
        return back()->with("failed", "Ocurrio un error, ya existe este usuario o sus datos son similares, por favor ingrese diferentes datos.");
      }
    }

    /*-------------------Acciones categorias ----------------------*/
    public function categorias(){
        $categoria = Categorias::all();
        return view('Administrador/categoria/categorias',compact('categoria'));
    }

    public function Agregar(Request $request){
        $request->validate([
            'Nombre' => 'required|min:2|max:30'
        ]);
        try{
        $categoria = new Categorias();
        $categoria->Nombre_Categoria = $request->Nombre;
        $categoria->save();
        return back()->with("success", "Se ha registrado la categoria exitosamente.");
      }catch(Exception $e){
        return back()->with("failed", "Ocurrio un error, ya existe esta categoria, ingresa una diferente.");

        }
    }

    public function EstadoC($id){
      $busqueda=Categorias::find($id);
      if($busqueda!=null){
      
           if($busqueda->estado == 1){
              $busqueda->estado=0;
           }else{
             $busqueda->estado=1;   
           }
         $busqueda->save();   
         return redirect()->action([ControladorAdmin::class,"categorias"]);
              
     }
  }

    public function editarC($id){
      $categorias=Categorias::find($id);
        return view('Administrador/categoria/editar',compact('categorias'));
    }

    public function ModificarC(Request $request){
      $categoria=Categorias::find($request->id);
      if($categoria !=null){
           $categoria->Nombre_Categoria=$request->categoria;
           $categoria->save();
      }
      return redirect()->action([ControladorAdmin::class,"categorias"]);
    }
    /*---------------Acciones Colores ------------------------------------- */

    public function MostrarColor(){
        $colores=Colores::paginate(5);
      return  view('Administrador/colores/MostrarColor')->with('colores',$colores);
    }
   
    public function EditarColor($id){
       $busqueda=Colores::find($id);
       return view('Administrador/colores/ModificarColor')->with('color',$busqueda);
    }

    public function EstadoColor($id){
        $busqueda=Colores::find($id);
        if($busqueda!=null){
         try{
             if($busqueda->estado == 1){
                $busqueda->estado=0;
             }else{
               $busqueda->estado=1;   
             }
           $busqueda->save();   
           return redirect()->action([ControladorAdmin::class,"MostrarColor"]);
         }catch(Exeption $e){  
            return response()->json($e.getMessage()); 
         }
       }
    }

    public function GuardarColor(Request $request){
      $request->validate([
        'ColorN'=>'required|min:3|max:20|'
      ]);
        try{
        $Ncolor= new Colores();
        $Ncolor->color=$request->ColorN;
        $Ncolor->estado=1;
        $Ncolor->save();
        return back()->with("success", "Se ha registrado el color exitosamente.");
      }catch(Exception $e){
        return back()->with("failed", "Ocurrio un error, ya existe este color, ingrese uno diferente.");

        }
    }


    public function ModificarColor(Request $request){
         $request->validate([
           'color'=>'required/min:3/max:12'
         ]);
         try{
          $busqueda=Colores::find($request->idColor);
          if($busqueda!=null){
            $busqueda->color=$request->colorN;
            $busqueda->save();
            return redirect()->action([ControladorAdmin::class, "MostrarColor"]);
          }
         }catch(Exception $e){
             return response()->$e.getMessage();
         }
    }

    /*-----------------------Acciones tallas------------------- */

    public function MostrarTallas(){
        $registros=Tallas::all();
       return view('Administrador/tallas/MostrarTallas')->with("tallas",$registros);
    }

    public function GuardarTalla(Request $request){
           $request->validate([
            'talla'=>'required'
           ]);
        
          try{
            $talla= new Tallas(); 
            $talla->talla=$request->talla;
            $talla->estado=1;
            $talla->save();
            return back()->with("success", "Su ha agregado la talla correctamente.");
          }catch(Exception $e){
            return back()->with("failed", "Ocurrio un error, esta talla ya existe, ingrese otra talla.");

          } 

    }

    public function EditarTalla(Request $request){
      $request->validate([
       'tallaN'=>'required',
       'idTalla'=>'required'
      ]);
       $Btalla=Tallas::find($request->idTalla);
       if($Btalla!=null){
         try{
         $Btalla->talla=$request->tallaN;
         $Btalla->save();
         return redirect()->action([ControladorAdmin::class,"MostrarTallas"]);
         }catch(Exception $e){
           return response()->json($e.getMessage());
         }
       }
      
    }

    public function ModificarTalla($id){
         $busquedaTalla=Tallas::find($id);
        return view('Administrador/tallas/ModificarTallas')->with('tallaB', $busquedaTalla);
    }

    public function EstadoTalla($id){
      $busquedaT=Tallas::find($id);
      if($busquedaT!=null){
        if($busquedaT->estado==0){
             $busquedaT->estado=1;
        }else{
          $busquedaT->estado=0;
        }
        $busquedaT->save();
      }
      return redirect()->action([ControladorAdmin::class, "MostrarTallas"]);
    }

   /*----------Accciones productos------------ */
public function EditarProductos($id){
  $productoB=Productos::find($id);
  $colores=Colores::all();
  $categorias=Categorias::all();
  $talla=Tallas::all();
   $tallasE=Productos::join('producto_talla',function($join) use ($productoB){
                            $join->on('producto_talla.id_producto','=','productos.id')
                            ->where('producto_talla.id_producto','=',$productoB->id);
                           })
                            ->select("*")
                            ->get();

   $imagenesE=Productos::join('foto_producto',function($join) use ($productoB){
                              $join->on('foto_producto.id_producto','=','productos.id')
                              ->where('foto_producto.id_producto','=',$productoB->id);
                             })
                               ->select("*")
                               ->get();
   return view('Administrador/productos/EditarProducto')
                                                  ->with('tallasE',$tallasE)
                                                  ->with('productoB',$productoB)
                                                  ->with('colores',$colores)
                                                  ->with('categorias',$categorias)
                                                  ->with('tallas',$talla)
                                                  ->with('imagenesE',$imagenesE);
}

public function ModificarTablasIntermedias($idProducto,$request){
  $arrayIdTallaEditar=[];
  $arrayIdImagenesEditar=[];
  $productoTallaE=ProductosTallas::where('id_producto','=',$idProducto)->get();
  $productoImagenE=FotoProducto::where('id_producto','=',$idProducto)->get();
  foreach($productoTallaE as $productoE){
  array_push($arrayIdTallaEditar, $productoE->id);
  }
  foreach($productoImagenE as $productoImagE){
 array_push($arrayIdImagenesEditar,$productoImagE->id);
  }
  foreach($arrayIdTallaEditar as $fila=>$value){
  $buscarDetalleE=ProductosTallas::find($value);
  $buscarDetalleE->id_talla=$request->tallas[$fila];
  $buscarDetalleE->save();
  }
  foreach ($arrayIdImagenesEditar as $key => $value) {
   $buscarImagenProducto=FotoProducto::find($value);
   $buscarImagenProducto->foto=$request->imagenes[$key]->store('uploads','public');
   $buscarImagenProducto->save();  
  }
  return true;
}

public function ModificarProductos(Request $request){
  $productoE=Productos::find($request->idProducto);
  if($productoE !=null){
    $productoE->nombre=$request->nombre;
    $productoE->precio=$request->precio;
    $productoE->descuento=$request->descuento;
    $productoE->descripcion=$request->descripcion;
    $productoE->id_color=$request->color;
    $productoE->id_categoria=$request->categoria;  
    $productoE->save();
    $res= ControladorAdmin::ModificarTablasIntermedias($productoE->id,$request);
    if($res){
      return "yo quiero es un hijupueta perreo por ser buen programador";
    }
  }  
  
 return response()->json($productoTallaE);
}
public function MostrarProductos(){
 $colores=Colores::where("estado","=", "1")->get();
 $categorias=Categorias::where("estado","=","1")->get();
 $tallas=Tallas::where("estado","=","1")->get();
 $producto=Productos::all();
 $imagenes= Productos::select('productos.id','foto_producto.foto')
                      ->join('foto_producto','foto_producto.id_producto','=','productos.id')
                      ->get();
                     
 $tallasP=Productos::join('producto_talla','producto_talla.id_producto','=','productos.id')
                      ->select("*")
                      ->get();
return view('Administrador/productos/MostrarProductos')
                                     ->with('colores',$colores)
                                     ->with('categorias',$categorias)
                                     ->with('tallas',$tallas)
                                     ->with('productos',$producto)
                                     ->with('imagenes',$imagenes)
                                     ->with('tallasP', $tallasP);
}

public function GuardarTablaFotoProducto($imagenes,$producto){
  $res=false;
  try{
  foreach($imagenes as $imagen){
   $fotoProducto=new FotoProducto();
   $fotoProducto->foto=$imagen->store('uploads','public');
   $fotoProducto->id_producto=$producto->id;
   $fotoProducto->save();
  }
  $res=true;
  }catch(Exception $e){
    return "Error Imagenes";
  }
  return $res;
}

public function GuardarTallaIntermedia($tallas,$cantidadesTallas,$producto){
foreach($tallas as $filas =>$talla){
  $producto_talla= new ProductosTallas();
  $producto_talla->cantidad=$cantidadesTallas[$filas];
  $producto_talla->id_talla=$talla;
  $producto_talla->id_producto=$producto->id;
  $producto_talla->save();
}
return true;
}

public function GuardarProductos(Request $request){
  try{
     $producto= new Productos(); 
     $producto->nombre=$request->nombre;
     $producto->stock=$request->stock;
     $producto->precio=$request->precio;
     $producto->descuento=$request->descuento;
     $producto->estado=1;
     $producto->descripcion = $request->descripcion;
     $producto->id_color=$request->color;
     $producto->id_categoria=$request->categoria;
     $producto->save();
     $tallas=[];
     $cantidadesTallas=[];
     $tallas=$request->tallas;
     $cantidadesTallas=$request->cantidadTalla;
     if($request->hasFile('imagenes')){
       $imagenes=$request->file('imagenes');
        $r=ControladorAdmin::GuardarTablaFotoProducto($imagenes, $producto);
       if($r){
         $res=ControladorAdmin::GuardarTallaIntermedia($tallas,$cantidadesTallas,$producto);
         if($res){
           return redirect()->action([ControladorAdmin::class, "MostrarProductos"]);
         }
       }
     }
  
  }catch(Exception $e){
  
   return $e->getMessage();
  }
  
 return response()->json($request);
}

public function EstadoProductos($id){
 $busquedaProducto=Productos::find($id);
 try{
   if($busquedaProducto!=null){
     if($busquedaProducto->estado==1){
        $busquedaProducto->estado=0;
      }else{
       $busquedaProducto->estado=1;  
      }
     $busquedaProducto->save();
     return redirect()->action([ControladorAdmin::class, "MostrarProductos"]);
    } 
  }catch(Exception $e){
   return $e.getMensagge();
  }   
}
  
  
  
   /*Accciones pedidos */
   public function MostrarPedidos(){
    $productos=Productos::all();
    $pedidosT=Pedidos::all();
    $estadosPedido=EstadoPedido::all();
    $pedidos=Pedidos::join("detalle_pedido_productos", "detalle_pedido_productos.id_pedido", "=", "pedidos.Id_pedido")
                     ->join("pago_en_lineas", "pago_en_lineas.id_pedido","=","pedidos.Id_pedido")
                     ->join("users","users.Id_Usuarios","=","pedidos.id_usuario")
                     ->select("*")
                     ->get();
                    

    return view('Administrador/pedidos/MostrarPedidos')->with('pedidos', $pedidos)
                                   ->with('productos', $productos)
                                   ->with('pedidosT',$pedidosT)
                                   ->with('estadoPedido', $estadosPedido);  
   }

   public function EditarEstadoPedido($id){
     $estadosPedidos=EstadoPedido::all();
    $pedidos=Pedidos::join("detalle_pedido_productos", "detalle_pedido_productos.id_pedido", "=", "pedidos.Id_pedido")
                     ->join("pago_en_lineas", "pago_en_lineas.id_pedido","=","pedidos.Id_pedido")
                     ->join("users","users.Id_Usuarios","=","pedidos.id_usuario")
                     ->where("pedidos.Id_pedido","=",$id)
                     ->select("*")
                     ->get();
                     
      return view('Administrador/pedidos/EditarPedido')->with('pedidos',$pedidos)
                                                       ->with('estadoPedido', $estadosPedidos);               
   }

   public function CambiarEstadoPedido(Request $pedido){
    $pedidoB=Pedidos::find($pedido->idpedido);
    $pedidoB->id_estado=$pedido->estadoPedido;
    $pedidoB->save();
    
    return redirect()->action([ControladorAdmin::class , "MostrarPedidos"]);
   }


   public function MostrarPagosRealizados(){

   }
}

                    