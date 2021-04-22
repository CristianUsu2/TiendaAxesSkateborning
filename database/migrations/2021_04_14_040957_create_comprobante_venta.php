<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobanteVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_de_ventas', function (Blueprint $table) {
            $table->id('Id_Comprobante');
            $table->date('Fecha');
            $table->unsignedBigInteger('id_pedido')->unique();
            $table->foreign('id_pedido')->references('Id_Pedido')->on('pedidos');
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
        Schema::dropIfExists('comprobante_venta');
    }
}
