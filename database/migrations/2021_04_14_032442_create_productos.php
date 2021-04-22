<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->integer('stock');
            $table->float('precio');
            $table->decimal('descuento',5,4)->nullable();
            $table->integer('estado');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_color');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_color')->references('id')->on('colores');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
