<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->integer('patrimonio');
            $table->string('nomepatrimonio');
            $table->string('usuario_nomeusuario');
            $table->string('numeroserie');
            $table->string('marca');
            $table->string('modelo');
            $table->date('garantia');
            $table->string('localizacao');
            $table->string('observacao');
            $table->string('tipo');
            $table->string('descricao');
            $table->string('memoria');
            $table->string('armazenamento');
            $table->string('processador');
            $table->string('sistemaoperacional');
            $table->string('setor');
            $table->primary('patrimonio');
            $table->foreign('usuario_nomeusuario')->references('nomeusuario')->on('usuarios');
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
        Schema::dropIfExists('inventarios');
    }
};
