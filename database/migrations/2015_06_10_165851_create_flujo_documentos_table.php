<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlujoDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujoDocumentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuarioCreador')->unsigned();
            $table->integer('idTipoDocumento')->unsigned();
            $table->string('nombre', 50);
            $table->integer('correlativo');
            $table->text('descripcion');

            $table->foreign('idUsuarioCreador')
                ->references('id')
                ->on('usuarios');

            $table->foreign('idTipoDocumento')
                ->references('id')
                ->on('tipoDocumentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flujoDocumentos');
    }
}
