<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->integer("num_contrato")->unique();
            $table->string("tipo");
            $table->string("nome");
            $table->integer("id_regional")->unsigned();
            $table->foreign('id_regional')->references('id')->on('regionals');
            $table->string("endereco");
            $table->char("tipo_servico");
            $table->integer("tensao");
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
        Schema::dropIfExists('contratos');
    }
}
