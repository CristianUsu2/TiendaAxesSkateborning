<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('Id_Usuarios');
            $table->string('name',30);
            $table->string('email',50)->unique();
            $table->string('identificacion',15)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->integer('estado');
            $table->unsignedBigInteger('id_rol');
            $table->string('apellido', 20);
            $table->string('telefono', 10);
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
