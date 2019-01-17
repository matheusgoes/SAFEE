<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
    protected  $fillable = ['num_contrato', 'tipo_contrato', 'data_emissao', 'data_leitura','classificacao', 'saldo', 'demanda_contratada', 'demanda_contratada_ponta', 'multas', 'juros', 'demanda_ativa_R$', 'demanda_ativa_ponta_R$', 'demanda_ativa_ultrapassagem_R$', 'demanda_ativa_ultrapassagem_ponta_R$', 'demanda_reativa_excedente_R$', 'demanda_reativa_excedente_ponta_R$', 'consumo_ativo_R$', 'consumo_ativo_ponta_R$', 'consumo_reativo_exc_R$', 'consumo_reativo_exc_ponta_R$', 'demanda_ativa_kw', 'demanda_ativa_ponta_kw', 'demanda_ativa_ultrapassagem_kw', 'demanda_ativa_ultrapassagem_ponta_kw', 'demanda_reativa_excedente_kvar', 'demanda_reativa_excedente_ponta_kvar', 'consumo_ativo_kwh', 'consumo_ativo_ponta_kwh', 'consumo_reativo_exc_kvarh', 'consumo_reativo_exc_ponta_kvarh', 'demanda_maxima_kw', 'demanda_maxima_ponta_kw', 'demanda_maxima_corrigida_kw', 'demanda_maxima_corrigida_ponta_kw', 'consumo_reativo_total_kvar', 'consumo_reativo_total_ponta_kvar', 'fator_de_potencia', 'perda_de_transformacao'];
}
