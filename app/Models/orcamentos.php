<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orcamentos extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'veiculo_id',
        'dataCriacao',
        'observacao',
        'status',
        'kilometragemAtual',
        'valorTotal',
        'valorDesconto',
    ];
}
