<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orcamentoitens extends Model
{
    protected $fillable = [
        'id',
        'item',
        'servico_id',
        'produto_id',
        'valorItem',
    ];
}
