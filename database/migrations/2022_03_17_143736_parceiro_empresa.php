<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParceiroEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceiro_empresa', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('empresas_id');
            $table->foreign('clientes_id');
            $table->foreign('tipo_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parceiro_empresa');
    }
}
