<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vinculoservicoproduto extends Model
{
    protected $fillable = [
        'servico_id',
        'produto_id',
    ];
}
