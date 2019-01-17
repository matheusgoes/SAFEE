<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("num_contrato")->unsigned();
            $table->foreign('num_contrato')->references('num_contrato')->on('contratos');
            $table->string("tipo_contrato");
            $table->date("data_emissao");
            $table->date("data_leitura");
            $table->string('classificacao');
            $table->float('saldo');
            $table->float('demanda_contratada');
            $table->float('demanda_contratada_ponta');
            $table->float('multas');
            $table->float('juros');

            $table->float('demanda_ativa_R$');
            $table->float('demanda_ativa_ponta_R$');
            $table->float('demanda_ativa_ultrapassagem_R$');
            $table->float('demanda_ativa_ultrapassagem_ponta_R$');
            $table->float('demanda_reativa_excedente_R$');
            $table->float('demanda_reativa_excedente_ponta_R$');
            $table->float('consumo_ativo_R$');
            $table->float('consumo_ativo_ponta_R$');
            $table->float('consumo_reativo_exc_R$');
            $table->float('consumo_reativo_exc_ponta_R$');

            $table->float('demanda_ativa_kw');
            $table->float('demanda_ativa_ponta_kw');
            $table->float('demanda_ativa_ultrapassagem_kw');
            $table->float('demanda_ativa_ultrapassagem_ponta_kw');
            $table->float('demanda_reativa_excedente_kvar');
            $table->float('demanda_reativa_excedente_ponta_kvar');
            $table->float('consumo_ativo_kwh');
            $table->float('consumo_ativo_ponta_kwh');
            $table->float('consumo_reativo_exc_kvarh');
            $table->float('consumo_reativo_exc_ponta_kvarh');

            $table->float('demanda_maxima_kw');
            $table->float('demanda_maxima_ponta_kw');
            $table->float('demanda_maxima_corrigida_kw');
            $table->float('demanda_maxima_corrigida_ponta_kw');
            $table->float('consumo_reativo_total_kvar');
            $table->float('consumo_reativo_total_ponta_kvar');
            $table->float('fator_de_potencia');
            $table->float('perda_de_transformacao');
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
        Schema::dropIfExists('faturas');
    }
}
