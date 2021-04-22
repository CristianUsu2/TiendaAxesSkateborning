<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    /*Relacion 1 a muchos */

    public function colores(){
        return $this->belongsTo('App\Models\Colores');
    }

    public function categorias(){
        return $this->belongsTo('App\Models\Categorias');
    }

    /*Relacion 1 a muchos inversa */
    public function fotoproducto(){
        return $this->hasMany('App\Models\FotoProducto');
    }
   
    /*Relacion muchos a muchos */
    
    public function entrada(){
        return $this->belongsToMany('App\Models\Entrada');
    }

    public function tallas(){
        return $this->belongsToMany('Apps\Models\Tallas');
    }

    public function Pedidos(){
        return $this->belongsToMany('App\Models\Pedidos');
    }
}
