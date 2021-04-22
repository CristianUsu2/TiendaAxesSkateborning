<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoEnLinea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_en_lineas', function (Blueprint $table) {
            $table->id('Id_Pago');
            $table->string('Tipo_Pago');
            $table->float('Valor_Pago');
            $table->date('Fecha');
            $table->unsignedBigInteger('id_tipo_pago');
            $table->foreign('id_tipo_pago')->references('Id_Tipo_Pago')->on('tipo_pago');
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
        Schema::dropIfExists('pago_en_linea');
    }
}
