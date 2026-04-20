<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordemservicoitens extends Model
{
    protected $fillable = [
        'id',
        'item',
        'servico_id',
        'produto_id',
        'valorItem',
    ];
}
