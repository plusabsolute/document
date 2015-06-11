<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipoUsuario')->unsigned();
            $table->string('nombre', 50);
            $table->string('usuario', 30);
            $table->string('contrasena', 100);
            $table->date('fechaCreacion');
            $table->dateTime('ultimoAcceso');

            $table->foreign('idTipoUsuario')
                ->references('id')
                ->on('tipoUsuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
