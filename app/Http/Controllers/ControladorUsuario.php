<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Colores;
use App\Models\Categorias;
use App\Models\Tallas;
use App\Models\Productos;
use App\Models\FotoProducto;
use App\Models\ProductosTallas;
use App\Models\Pedidos;
use App\Models\DetallePedidoProducto;
use App\Models\PagoEnLinea;
use App\Models\ComprobanteDeVenta;
use App\Models\EstadoPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use UxWeb\SweetAlert\SweetAlert;
use Response;

use Exception;

class ControladorUsuario extends Controller
{
    public function index(){
      $colores=Colores::where("estado","=", "1")->get();
      $categorias=Categorias::where("estado","=","1")->get();
      $tallas=Tallas::where("estado","=","1")->get();
      $producto=Productos::where("estado","=","1")->get();
      $imagenes= Productos::select('productos.id','foto_producto.foto')
                           ->join('foto_producto','foto_producto.id_producto','=','productos.id')
                           ->get();
                          
      $tallasP=Productos::join('producto_talla','producto_talla.id_producto','=','productos.id')
                           ->select("*")
                           ->get();                                        
        return view('Usuario/index')->with('colores',$colores)
                                    ->with('categorias',$categorias)
                                    ->with('tallas',$tallas)
                                    ->with('productos',$producto)
                                    ->with('imagenes',$imagenes)
                                    ->with('tallasP', $tallasP);
   }
   public function prueba(){
    alert()->success('You have been logged out.', 'Good bye!');
    return view('Usuario/prueba');
   }
   public function categoriaU(){
     return view('Usuario/categoriaU');
   }
   public function datosU($id){
    $UserB=User::find($id);
     return view('Usuario/informacion')->with('usuario',$UserB);;
   }

   public function update(Request $request){
    $request->validate([
       'pass' => 'required|min:2|max:30',
       'passC' => 'required|min:2|max:30'
       ]);

    $correoC=User::where('email','=',$request->correo)->first();

    if($correoC && $request->pass == $request->passC){
      $password = bcrypt($request->pass);
      $correoC->password = $password; 
      $correoC->save();
    }

    if(!$correoC ) {
      return back()->with("failed", "Ocurrio un error, no pudimos cambiar su contraseña, por favor verifique sus datos y vuelva a intentarlo.");
  }

  else {
      return back()->with("success", "Su contraseña fue cambiada exitosamente.");
  }


   return back()->with('error','No se pudo modificar la contraseña.');   

   }
   
   public function informacionU(Request $request){
    $usuM=User::find($request->IdUsuario);
    if($usuM !=null){
          $usuM->identificacion=$request->identificacion;
          $usuM->name=$request->nombre;
          $usuM->email=$request->email;
          $usuM->apellido=$request->apellido;
          $usuM->telefono=$request->telefono;
          $usuM->save();
  } 

  if(!$usuM ) {
    return back()->with("failed", "Ocurrio un error, no pudimos modificar sus datos, por favor vuelva a intentarlo.");
}

else {
    return back()->with("success", "Su datos fueron cambiados exitosamente.");
}


 return back()->with('error','Los datos son iguales, no hay datos por modificar.');   

 }

   public function detalleCompra(){
       return view('Usuario/detalleCompra');
   }
   public function cambioC(){
     return view('Usuario/reseteo');
   }

   public function detalleProd($idProducto){
        $producto=Productos::find($idProducto);
        $imagenes=Productos::join('foto_producto',function($join) use ($producto){
                                   $join->on('foto_producto.id_producto','=','productos.id')
                                   ->where('foto_producto.id_producto','=',$producto->id);
                                 })
                                  ->select("foto")
                                  ->get();
        $tallas=Productos::join('producto_talla',function($join) use ($producto){
                                $join->on('producto_talla.id_producto','=','productos.id')
                                ->where('producto_talla.id_producto','=',$producto->id);
                                })
                                ->select("*")
                                 ->get();
        $tallaP=Tallas::all();               
        $colores=Colores::all();    
        $categorias=Categorias::all();      
       return view('Usuario/detalleProd')
                                      ->with('ProductoSelecc', $producto)
                                      ->with('ImagenesProducto', $imagenes)
                                      ->with('tallasProducto', $tallas)
                                      ->with('tallas', $tallaP)
                                      ->with('categoria', $categorias)
                                      ->with('colores', $colores);
   } 
   
   public function inicio(){
       return view('Usuario/inicio');
   }

   public function FinalizarCompra(){
       $sesion=session('datosU');
       $pedidos=Pedidos::all();
       $ultimoPedido=$pedidos->last();
        if($sesion == null){
            return "no hay nada en sesion";
        } 
        foreach($sesion as $u){
          $id=$u->Id_Usuarios;
        }
        
       return view('Usuario/finalizarCompra')->with('usuario', $sesion)
                                             ->with('pedido',$ultimoPedido);
       
   }

   public function FinalizarCompraGoogle(Request $request){
      $res=1;
      try{
      $user=new User();
      $user->name=$request->name;
      $user->email=$request->email;
      $user->identificacion=$request->identificacion;
      $user->estado=1;
      $user->id_rol=1;
      $user->apellido=$request->apellido;
      $user->telefono=$request->telefono;
      $user->save();
      }catch(Exception $e){
        return Response::json($e->getMessage());
      }
      $usuario=User::where("email","=",$user->email)->get();
      session(['datosU' => $usuario]);
      return Response::json($res);
   }


   public function login(){

     return view('Usuario/login');
   }
    
    public function register(Request $request){
      $res=false;
       $request->validate([
            'nombre' => 'required|min:2|max:20',
            'apellido'=> 'required|min:2|max:20',
            'correo' => 'required|email|min:4|max:50|',
            'identificacion' => 'required|min:7|max:12|',
             'contraseña' => 'required|min:2|max:30',
             'ConfirmarContraseña'=>'required|min:2|max:30',
             'telefono' => 'required|min:2|max:11'
        ]);
          if($request->contraseña== $request->ConfirmarContraseña){
            try{
             $registro = new User();
             $registro->name = $request->nombre;
             $registro->email = $request->correo;
             $registro->identificacion = $request->identificacion;
             $incriptado= Hash::make($request->contraseña);
             $registro->password=$incriptado; 
             $registro->apellido = $request->apellido;
             $registro->telefono = $request->telefono;
             $registro->id_rol=1;
             $registro->estado=1;
             $registro->save();
             $res=true;
           }catch(Exception $e){
            return back()->with("failed", "Ocurrio un error, no pudimos crear su cuenta porque ya existen datos similares.");

          }
        }
          if($res) {
            return back()->with("success", "Su cuenta ha sido creada exitosamente, inicie sesion ");
        }
        else{
          return back()->with("failed", "Ocurrio un error, no pudimos crear su cuenta porque ya existen estos datos.");
  
        }
        
         return back()->with('error','No se pudo crear tu cuenta.');  
    } 

    public function loginV(Request $request){
      $request->validate([
        'Correo' => 'required|email|min:4|max:50|',
         'Contraseña' => 'required|min:2|max:30'
     
      ]);
        $busquedaEmail=User::where('email','=',$request->Correo)->value('email');
        $busquedaEncrip=User::where('email','=',$request->Correo)->value('password');
        $busquedaRol=User::where('email','=',$request->Correo)->value('id_rol');
        $busquedaId=User::where('email','=',$request->Correo)->value('Id_Usuarios'); 
        $DatosUsuario=[];
       
           if($busquedaEmail !=null && $busquedaEncrip !=null && $busquedaRol!=null && $busquedaId!=null ){
             array_push($DatosUsuario, $busquedaEmail,$busquedaEncrip, $busquedaRol, $busquedaId);     
             if($DatosUsuario[0]== $request->Correo){
               if(password_verify($request->Contraseña, $DatosUsuario[1])){ 

                if($DatosUsuario[2]== 2){
                  $usuario=User::where('Id_Usuarios','=',$DatosUsuario[3])->get();
                  session(['datosU' => $usuario]);
                 
                  return redirect()->action([ControladorAdmin::class,"index"]);
                }  

                else  if($DatosUsuario[2]== 1){
                    $usuario=User::where('Id_Usuarios','=',$DatosUsuario[3])->get();
                    session(['datosU' => $usuario]);
                   
                    return redirect()->action([ControladorUsuario::class,"index"]);
                  }
                
                }
              }
            }
         return redirect()->action([ControladorUsuario::class, "login"]);
         
    }

    public function loginC(){
      session()->forget('datosU');
      return redirect()->action([ControladorUsuario::class, "index"]);
    }
   
     

     public function GuardarCompra(Request $request){
       $fecha=date("Y-m-d H:i:s");
       $pedido=new Pedidos();
       $pedido->direccion=$request->direccion;
       $pedido->fecha=$fecha;
       $pedido->id_estado=1;
       $pedido->id_usuario=$request->idUsuario;
       $pedido->save();

       foreach($request->talla as $fila=>$value){
        $detallePedido= new DetallePedidoProducto();
        $detallePedido->cantidad=$request->cantidad[$fila];
        $detallePedido->Total=$request->total;
        $detallePedido->Sub_Total=$request->subtotal;
        $detallePedido->EstadoD="Generado";
        $detallePedido->id_pedido=$pedido->Id_Pedido;
        $detallePedido->id_producto=$request->idProducto[$fila];
        $detallePedido->talla=$value;
        $detallePedido->save();
        ControladorUsuario::ActualizarStock($request->idProducto[$fila],$request->cantidad[$fila], $value);
        }
         try{
         $comprobante= new ComprobanteDeVenta();
         $comprobante->Fecha=$fecha;
         $comprobante->id_pedido=$pedido->Id_Pedido;
         $comprobante->save();
         }catch(Exception $e){
           return response()->json($e->getMessage());
           return "error comprobante";
         }
         try{
           $pagoEnLinea= new PagoEnLinea();
           $pagoEnLinea->Tipo_Pago="ContraEntrega Domicilio";
           $pagoEnLinea->Valor_Pago=$request->total;
           $pagoEnLinea->Fecha=$fecha;
           $pagoEnLinea->id_tipo_pago =1;
           $pagoEnLinea->id_pedido= $pedido->Id_Pedido;
           $pagoEnLinea->save();
         }catch(Exception $e){
           return response()->json($e->getMessage());
          return "Erro en pago en linea";
         }
       
      return redirect()->action([ControladorUsuario::class, "PedidosUsuario"]);
     }
     
   

     public function ActualizarStock($id,$cantidad, $talla):void{
          $producto=Productos::find($id);
          $tallaS=Tallas::where("talla","=",$talla)->get();
          $tallaid=0;
          foreach($tallaS as $ta){
            $tallaid=$ta->id;
          }
          $stockAnterior=$producto->stock;
          $stockActual=$stockAnterior-$cantidad;
          $producto->stock=$stockActual;
          $producto->save(); 
          $tallasProducto=ProductosTallas::where('id_producto','=',$id)
                                           ->where('id_talla','=',$tallaid)
                                           ->get();
                                              
          $idProductoTalla=0;
          foreach($tallasProducto as $tP){
             $idProductoTalla=$tP->id;
          }
          $buscarRegistroTallaProducto=ProductosTallas::find($idProductoTalla); 
          $buscarRegistroTallaProducto->cantidad=$buscarRegistroTallaProducto->cantidad-$cantidad;
          $buscarRegistroTallaProducto->save();                               
     }


     public function PedidosUsuario(){
       $sesion=session('datosU');
       $idUsuario;
       foreach($sesion as $usua){
           $idUsuario=$usua->Id_Usuarios;
       }
       $usuario=User::find($idUsuario);
       $productos=Productos::all();
       $pedidosT=Pedidos::all();
       $estadosPedido=EstadoPedido::all();
       $pedidos=Pedidos::join("detalle_pedido_productos", "detalle_pedido_productos.id_pedido", "=", "pedidos.Id_pedido")
                        ->join("pago_en_lineas", "pago_en_lineas.id_pedido","=","pedidos.Id_pedido")
                        ->where('id_usuario','=',$usuario->Id_Usuarios)
                        ->select("*")
                        ->paginate(10);
                             
       return view('Usuario/PedidosU')->with('pedidos', $pedidos)
                                      ->with('productos', $productos)
                                      ->with('pedidosT',$pedidosT)
                                      ->with('estadoPedido', $estadosPedido);                       
     }
    
}