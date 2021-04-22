<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePago extends Model
{
    
    use HasFactory;
    protected $primaryKey = "Id_Tipo_Pago";
    public function PagoEnLinea(){
        return $this->hasMany('App\Models\PagoEnLinea');
    }
}
