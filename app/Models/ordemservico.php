<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordemservico extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'veiculo_id',
        'orcamento_id',
        'dataCriacao',
        'observacao',
        'status',
        'kilometragemAtual',
        'valorTotal',
        'valorDesconto',
    ];
}
