<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFlujoDocumento')->unsigned();
            $table->integer('idUsuarioDestino')->unsigned();
            $table->integer('idUsuarioModificacion')->unsigned();
            $table->integer('idEtapa')->unsigned();
            $table->string('pathDocumento', 100);
            $table->date('fecha');
            $table->text('descripcion');
            $table->boolean('estado');

            $table->foreign('idFlujoDocumento')
                ->references('id')
                ->on('flujoDocumentos');

            $table->foreign('idUsuarioDestino')
                ->references('id')
                ->on('usuarios');

            $table->foreign('idUsuarioModificacion')
                ->references('id')
                ->on('usuarios');

            $table->foreign('idEtapa')
                ->references('id')
                ->on('etapas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bitacoras');
    }
}
