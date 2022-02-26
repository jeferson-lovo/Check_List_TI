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
        Schema::create('checklist', function (Blueprint $table) {
            $table->integer('inventario_patrimonio');
            $table->string('nomepatrimonio');
            $table->string('usuario_nomeusuario');
            $table->tinyInteger('atualizacaowindows');
            $table->tinyInteger('antivirus');
            $table->tinyInteger('dominio');
            $table->date('datamanutencao');
            $table->integer('chamado');
            $table->tinyInteger('office');
            $table->tinyInteger('vpn');
            $table->string('descricao');
            $table->tinyInteger('vnc');
            $table->tinyInteger('acessoremoto');
            $table->tinyInteger('navegador');
            $table->tinyInteger('protheus');
            $table->tinyInteger('zip');
            $table->tinyInteger('googledrive');
            $table->string('condicao');
            $table->tinyInteger('leitorpdf');
            $table->tinyInteger('instalardriver');
            $table->tinyInteger('eartpro');
            $table->tinyInteger('arcgis');
            $table->string('agente');
            $table->tinyInteger('verificarimpressoras');
            $table->foreign('inventario_patrimonio')->references('patrimonio')->on('inventarios');
            //$table->foreign('usuario_nomeusuario')->references('nomeusuario')->on('usuarios');
            //caso der erro descomentar essa linha de chave estrangeira entre usuarios
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
        Schema::dropIfExists('checklist');
    }
};
