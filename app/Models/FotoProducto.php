<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model
{
    use HasFactory;
    public $table = "foto_producto";
    public function productos(){
        return $this->belongsTo('App\Models\FotoProducto');
    }
}
