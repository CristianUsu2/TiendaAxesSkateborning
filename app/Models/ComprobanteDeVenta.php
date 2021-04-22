<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedidos;
class ComprobanteDeVenta extends Model
{
    use HasFactory;
    protected $primaryKey = "Id_Comprobante";   
    public function pedidos(){
     return $this->belongsTo('App\Models\Pedidos');
    }
}
