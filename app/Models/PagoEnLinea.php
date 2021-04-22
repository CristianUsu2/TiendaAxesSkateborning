<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedidos;
class PagoEnLinea extends Model
{
    use HasFactory;
    protected $primaryKey = "Id_Pago";    
    public function pagoenlinea(){
        return $this->belongsTo('App\Models\PagoEnLinea');
    }

    public function pedidos(){
       return $this->belongsTo('App\Models\Pedidos');
    }
   
   
}
