<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstadoPedido;
use App\Models\PagoEnLinea;
use App\Models\CompranteDePedido;
use App\Models\User;
use App\Models\Productos;

class Pedidos extends Model
{
    use HasFactory;
   
    protected $primaryKey = "Id_Pedido";

    public function estadopedido(){
        return $this->belongsTo('App\Models\EstadoPedido');
    }
   
    public function pagoenlinea(){
        return $this->hasOne('App\Models\PagoEnLinea');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    } 

 
}
