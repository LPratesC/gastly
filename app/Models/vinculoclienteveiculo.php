<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vinculoclienteveiculo extends Model
{
    protected $fillable = [
        'cliente_id',
        'veiculo_id',
    ];
}
