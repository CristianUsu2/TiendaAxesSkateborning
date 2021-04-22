<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidoProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedido_productos', function (Blueprint $table) {
            $table->id('Id_Detalle');
            $table->integer('cantidad');
            $table->float('Total',255);
            $table->float('Sub_Total',255);
            $table->string('EstadoD');
            $table->string('talla');
            $table->unsignedBigInteger('id_pedido')->unique();
            $table->foreign('id_pedido')->references('Id_Pedido')->on('pedidos');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');
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
        Schema::dropIfExists('detalle_pedido_productos');
    }
}
