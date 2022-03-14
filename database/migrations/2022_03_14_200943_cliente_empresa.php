<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClienteEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_empresa', function (Blueprint $table) {
            $table->id();
            $table->interger('empresas_id')->unsigned();
            $table->foreign('empresas_id')->references('empresas')->on('id');
            $table->interger('clientes_id')->unsigned();
            $table->foreing('clientes_id')->references('cientes')->on('id');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
