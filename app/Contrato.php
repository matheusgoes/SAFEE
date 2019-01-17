<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['num_contrato', 'tipo', 'nome', 'id_regional', 'endereco', 'tipo_servico', 'tensao'];
}
